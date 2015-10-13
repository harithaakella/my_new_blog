<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = [
			'menu' 	=> 'home',
		];
		$this->load->view('front/index', $data);
	}
	
	public function about()
	{
		$data = [
			'menu' 	=> 'about',
		];
		$this->load->view('front/about', $data);
	}
	
	public function blog()
	{
		$this->load->model('post');
		$this->load->library('pagination');
		
		$posts = Post::all();
		
		$config['base_url'] = base_url().'blog/page/';
		$config['total_rows'] = $posts->count();
		$config['per_page'] = 5;
		$skip = ($this->uri->segment(3) - 1) * $config['per_page'];

		$this->pagination->initialize($config);

		$data = [
			'menu' 	=> 'blog',
			'posts' 		=> Post::orderBy('created_at','desc')->skip($skip)->take($config['per_page'])->get(),
			'links'			=> $this->pagination->create_links(),
		];
		$this->load->view('front/blog', $data);
	}
	
	public function posts($id)
	{
		$this->load->helper('form');
		$this->load->model(['post','comment']);
		$post = NULL;
		try {
			$post = Post::findOrFail($id);
		} catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
			show_404();
		}
		$data = [
			'menu' 		=> 'blog',
			'post'		=> $post,
		];
		
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="text-danger"><strong><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> ', '</strong></p>');
		
		if ($this->form_validation->run('create-comment') == FALSE)
		{
			$this->load->view('front/blog-post', $data);
		}
		else
		{
			$comment = new Comment;
			$comment->post_id = $this->input->post('id');
			$comment->name = $this->input->post('name');
			$comment->content = $this->input->post('comment');
			$comment->save();
			
			$this->session->set_flashdata('message', 'Successfully save!');
			redirect('posts/'.$id.'#comments');
		}
	}
	
}
