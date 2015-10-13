<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		if(!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		
		
		$this->load->helper(['url','form']);
		$this->load->model(['post', 'category', 'comment', 'user']);
	}
	public function index()
	{
		$data = [
			'menu' => 'dashboard',
		];
		$this->load->view('dashboard/index', $data);
	}

	public function posts()
	{
		$this->load->library('pagination');
		
		$posts = Post::all();
		
		$config['base_url'] = base_url().'dashboard/posts/page/';
		$config['total_rows'] = $posts->count();
		$config['per_page'] = 5;
		$skip = ($this->uri->segment(4) - 1) * $config['per_page'];

		$this->pagination->initialize($config);

		$data = [
			'menu'			=> 'posts',
			'posts' 		=> Post::skip($skip)->take($config['per_page'])->get(),
			'links'			=> $this->pagination->create_links(),
			'row'			=> ($this->uri->segment(4)) ? ($config['per_page'] * ($this->uri->segment(4) - 1) ) : 0,
		];
		
		// set redirect back url in session
		$this->session->set_userdata('previous_url', current_url());
		
		$this->load->view('dashboard/posts-list', $data);
	}
	
	public function posts_create()
	{
		$data = [
			'menu' => 'posts_create',
		];
		
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="text-danger"><strong><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> ', '</strong></p>');
		
		if ($this->form_validation->run('create-post') == FALSE)
		{
			$this->load->view('dashboard/posts-create', $data);
		}
		else
		{
			$post = new Post;
			$post->title 		= $this->input->post('title');
			$post->content 		= $this->input->post('content');
			$post->user_id		= $this->ion_auth->user()->row()->id;
			$post->save();
			
			if($this->input->post('category'))
			{
				$post = Post::find($post->id);
				$post->categories()->attach($this->input->post('category'));
			}
			
			$this->session->set_flashdata('message', 'Successfully save <strong>'.$post->title.'</strong>');
			redirect('dashboard/posts', 'refresh');
		}
	}
	
	public function posts_edit($id)
	{
		//set empty array for related categories of post
		$post_cat = [];
		
		foreach(Post::find($id)->categories()->get() as $cat)
		{
			$post_cat[$cat->id] = $cat->id;
		}
		
		$data = [
			'menu' 				=> 'posts',
			'post' 				=> Post::find($id),
			'post_categories'	=> $post_cat,
		];
		
		
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="text-danger"><strong><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> ', '</strong></p>');
		
		if ($this->form_validation->run('create-post') == FALSE)
		{
			$this->load->view('dashboard/posts-edit', $data);
		}
		else
		{
			$post = Post::find($id);
			$post->title 		= $this->input->post('title');
			$post->content 		= $this->input->post('content');
			$post->save();
			
			// if no category supplied, delete all with empty array
			if(! $this->input->post('category'))
			{
				$post->categories()->sync([]);
			}
			else
			{
				$post->categories()->sync($this->input->post('category'));
			}
			
			$this->session->set_flashdata('message', 'Successfully save <strong>'.$post->title.'</strong>');
			redirect($this->session->previous_url, 'refresh');
		}
	}
	
	public function posts_delete()
	{
		$this->load->library('form_validation');
		
		if($this->form_validation->run('delete-post') == FALSE)
		{
			redirect($this->session->previous_url, 'refresh');
		}
		else
		{
			$post = Post::find($this->input->post('id'));
			Post::destroy($this->input->post('id'));
			Comment::where('post_id',$post->id)->delete();
			
			$this->session->set_flashdata('message', 'Successfully deleted <strong>'.$post->title.'</strong>');
			redirect('dashboard/posts', 'refresh');
		}
	}
	
	
	public function categories()
	{
		$this->load->library('pagination');
		
		$categories = Category::all();
		
		$config['base_url'] = base_url().'dashboard/categories/page/';
		$config['total_rows'] = $categories->count();
		$config['per_page'] = 5;
		$skip = ($this->uri->segment(4) - 1) * $config['per_page'];

		$this->pagination->initialize($config);

		$data = [
			'menu' 			=> 'categories',
			'categories' 	=> Category::skip($skip)->take($config['per_page'])->get(),
			'links'			=> $this->pagination->create_links(),
			'row'			=> ($this->uri->segment(4)) ? ($config['per_page'] * ($this->uri->segment(4) - 1) ) : 0,
		];
		

		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span class="text-danger"><strong><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> ', '</strong></span>');
		
		if ($this->form_validation->run('create-category') == FALSE)
		{
			// set redirect back url in session
			$this->session->set_userdata('previous_url', current_url());
			
			$this->load->view('dashboard/categories', $data);
		}
		else
		{
			$category = new Category;
			$category->name = $this->input->post('name');
			$category->save();
			
			$this->session->set_flashdata('message', 'Successfully save <strong>'.$category->name.'</strong>');
			redirect($this->session->previous_url, 'refresh');
		}
	}
	
	public function categories_edit($id)
	{
		$data = [
			'menu'				=> 'categories',
			'category'			=> Category::find($id),
		];
		
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="text-danger"><strong><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> ', '</strong></p>');
		
		if($this->form_validation->run('create-category') == FALSE)
		{
			$this->load->view('dashboard/categories-edit', $data);
		}
		else
		{
			$category = Category::find($id);
			$category->name	= $this->input->post('name');
			$category->save();
			
			$this->session->set_flashdata('message', 'Successfully save <strong>'.$category->name.'</strong>');
			redirect($this->session->previous_url, 'refresh');
		}
	}
	
	public function categories_delete()
	{
		$this->load->library('form_validation');
		
		if($this->form_validation->run('delete-category') == FALSE)
		{
			redirect($this->session->previous_url, 'refresh');
		}
		else
		{
			$category = Category::find($this->input->post('id'));
			Category::destroy($this->input->post('id'));
			
			$this->session->set_flashdata('message', 'Successfully deleted <strong>'.$category->name.'</strong>');
			redirect('dashboard/categories', 'refresh');
		}
	}
		
	public function comments()
	{
		$this->load->library('pagination');
		
		$comments = Comment::all();
		
		$config['base_url'] = base_url().'dashboard/comments/page/';
		$config['total_rows'] = $comments->count();
		$config['per_page'] = 5;
		$skip = ($this->uri->segment(4) - 1) * $config['per_page'];

		$this->pagination->initialize($config);

		$data = [
			'menu'			=> 'comments',
			'comments' 		=> Comment::skip($skip)->take($config['per_page'])->get(),
			'links'			=> $this->pagination->create_links(),
			'row'			=> ($this->uri->segment(4)) ? ($config['per_page'] * ($this->uri->segment(4) - 1) ) : 0,
		];
		
		
		$this->load->view('dashboard/comments', $data);
	}
	
	
	public function users()
	{
		// check if not admin, access denied
		$this->_is_admin();
		
		$this->load->library('pagination');
		
		$users = $this->ion_auth->users()->result();
		
		$config['base_url'] = base_url().'dashboard/users/page/';
		$config['total_rows'] = count($users);
		$config['per_page'] = 5;
		$skip = ($this->uri->segment(4) - 1) * $config['per_page'];

		$this->pagination->initialize($config);

		$data = [
			'menu'			=> 'users',
			'users' 		=> User::skip($skip)->take($config['per_page'])->get(),
			'links'			=> $this->pagination->create_links(),
			'row'			=> ($this->uri->segment(4)) ? ($config['per_page'] * ($this->uri->segment(4) - 1) ) : 0,
		];
		$this->session->set_userdata('previous_url', current_url());
		$this->load->view('dashboard/users-list', $data);
	}
	
	public function users_create()
	{
		// check if not admin, access denied
		$this->_is_admin();
		
		$data = [
			'menu' => 'users_create',
		];
		
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="text-danger"><strong><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> ', '</strong></p>');
		$this->form_validation->set_message('is_unique', 'The {field} has been registered. Please use other {field}.');
		
		if ($this->form_validation->run('create-user') == FALSE)
		{
			$this->load->view('dashboard/users-create', $data);
		}
		else
		{
			$password = $this->input->post('password');
			$email = $this->input->post('email');
			$additional_data = [
				'username' => $this->input->post('username'),
			];
			
			// save into db
			if($this->ion_auth->register($this->config->item('identity'), $password, $email, $additional_data) == FALSE)
			{
				print_r($this->ion_auth->errors());
				exit(1);
			}
			
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			redirect('dashboard/users', 'refresh');
		}
	}
	
	public function users_edit($id)
	{
		$data = [
			'menu'	=> 'users',
			'user'	=> User::find($id)
		];
		
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="text-danger"><strong><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> ', '</strong></p>');
		
		if($this->form_validation->run('edit-user') == FALSE)
		{
			$this->load->view('dashboard/users-edit', $data);
		}
		else
		{
			$user = User::find($id);
			$user->username = $this->input->post('username');
			$user->active = $this->input->post('status');
			$user->save();
			
			$this->session->set_flashdata('message', 'Successfully save <strong>'.$user->username.'</strong>');
			redirect($this->session->previous_url, 'refresh');
		}
	}
	
	public function users_delete()
	{
		// check if not admin, access denied
		$this->_is_admin();
		
		$this->load->library('form_validation');
		
		if($this->form_validation->run('delete-user') == FALSE)
		{
			redirect($this->session->previous_url, 'refresh');
		}
		else
		{
			$user = $this->ion_auth->user()->row();
		
			// check if try to delete himself, access denied
			if($user->id == $this->input->post('id'))
			{
				$this->session->set_flashdata('errors', 'You cannot delete yourself!');
				redirect('dashboard/users', 'refresh');
			}
			
			$this->ion_auth->delete_user($this->input->post('id'));
			
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			redirect('dashboard/users', 'refresh');
		}
	}
		
	public function groups()
	{
		if (!$this->ion_auth->is_admin())
		{
			show_404();
		}
		
		$data = [
			'menu' 			=> 'users',
			'groups' 		=> $this->ion_auth->groups()->result(),
			'row'			=> 0,
		];
		
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span class="text-danger"><strong><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> ', '</strong></span>');
		
		if ($this->form_validation->run('create-group') == FALSE)
		{
			$this->load->view('dashboard/users-group', $data);
		}
		else
		{
			$group = $this->ion_auth->create_group(strtolower($this->input->post('name')), $this->input->post('description'));
			
			if(!$group)
			{
				$this->session->set_flashdata('errors', $this->ion_auth->messages());
				redirect('dashboard/groups', 'refresh');
			}
			else
			{
				$this->session->set_flashdata('message', 'Successfully save <strong>'.$this->input->post('name').'</strong>');
				redirect('dashboard/groups', 'refresh');
			}
			
		}
	}
	
	public function groups_edit($group_id)
	{
		$data = [
			'menu'	=> 'users',
			'group'	=> $this->ion_auth->group($group_id)->row(),
		];
		
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="text-danger"><strong><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> ', '</strong></p>');
		
		if($this->form_validation->run('create-group') == FALSE)
		{
			$this->load->view('dashboard/users-group-edit', $data);
		}
		else
		{
			$group_name = strtolower($this->input->post('name'));
			$group_description = $this->input->post('description');
			
			if($this->ion_auth->update_group($group_id, $group_name, $group_description))
			{
				$this->session->set_flashdata('message', 'Successfully save <strong>'.$group_name.'</strong>');
				redirect('dashboard/groups', 'refresh');
			}
			
		}
	}
	
	public function groups_delete()
	{
		// check if not admin, access denied
		$this->_is_admin();
		
		$this->load->library('form_validation');
		
		if($this->form_validation->run('delete-group') == FALSE)
		{
			redirect('dashboard/groups', 'refresh');
		}
		else
		{
			$deleted = $this->ion_auth->delete_group($this->input->post('id'));
			
			if(!$deleted)
			{
				$this->ion_auth->set_error_delimiters('','');
				$this->session->set_flashdata('errors', $this->ion_auth->errors());
				redirect('dashboard/groups', 'refresh');
			}
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			redirect('dashboard/groups', 'refresh');
		}
	}
	
	public function change_password()
	{
		$data = [
			'menu'	=> 'password',
		];
		
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="text-danger"><strong><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> ', '</strong></p>');
		
		if($this->form_validation->run('change-password') == FALSE)
		{
			$this->load->view('dashboard/password-change', $data);
		}
		else
		{
			$id = $this->ion_auth->user()->row()->id;
			$detail = [
				'password' => $this->input->post('password')
			];
			if($this->ion_auth->update($id, $detail))
			{
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				redirect('dashboard/change-password', 'refresh');
			}
			
		}
	}

	private function _is_admin()
	{
		if (!$this->ion_auth->is_admin())
		{
			show_404();
		}
	}
}
