<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Xpasang extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('migration');
	}

	public function index()
	{
		if ($this->migration->latest() === FALSE)
		{
			show_error($this->migration->error_string());
		}
		
		echo "End of migration \r\n";		
	}
	
	public function refresh()
	{
		// migrate to 0 version to delete tables
		$this->_version(0);
		
		if ($this->migration->latest() === FALSE)
		{
			show_error($this->migration->error_string());
		}
		
		echo "End of migration \r\n";
	}	
	
	private function _version($id)
	{
		if ($this->migration->version($id) === FALSE)
		{
			show_error($this->migration->error_string());
		}
	}

}