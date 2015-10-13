<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
	'create-post' => array(
		array(
			'field' => 'title',
			'label' => 'Title',
			'rules' => 'trim|required|max_length[200]'
		),
		array(
			'field' => 'content',
			'label' => 'Content',
			'rules' => 'required'
		)
	),
	'delete-post' => array(
		array(
			'field' => 'id',
			'label' => 'Id',
			'rules' => 'required'
		)
	),
	'create-comment' => array(
		array(
			'field' => 'name',
			'label' => 'name',
			'rules' => 'trim|required|alpha|max_length[100]'
		),
		array(
			'field' => 'id',
			'label' => 'Post ID',
			'rules' => 'required'
		),
		array(
			'field' => 'comment',
			'label' => 'Comment',
			'rules' => 'trim|required|min_length[10]|max_length[500]'
		)
	),
	'create-category' => array(
		array(
			'field' => 'name',
			'label' => 'name',
			'rules' => 'trim|required|min_length[3]|max_length[100]'
		)
	),
	'delete-category' => array(
		array(
			'field' => 'id',
			'label' => 'Id',
			'rules' => 'required'
		)
	),
	'create-user' => array(
		array(
			'field' => 'username',
			'label' => 'Username',
			'rules' => 'trim|required|min_length[3]|max_length[15]|alpha_numeric'
		),
		array(
			'field' => 'email',
			'label' => 'E-mail',
			'rules' => 'trim|required|valid_email|is_unique[users.email]'
		)
	),
	'edit-user' => array(
		array(
			'field' => 'username',
			'label' => 'Username',
			'rules' => 'trim|required|min_length[3]|max_length[15]|alpha_numeric'
		),
		array(
			'field' => 'status',
			'label' => 'Status',
			'rules' => 'trim|required'
		)
	),
	'delete-user' => array(
		array(
			'field' => 'id',
			'label' => 'Id',
			'rules' => 'required'
		)
	),
	'create-group' => array(
		array(
			'field' => 'name',
			'label' => 'name',
			'rules' => 'trim|required|min_length[3]|max_length[100]'
		)
	),
	'delete-group' => array(
		array(
			'field' => 'id',
			'label' => 'Id',
			'rules' => 'required'
		)
	),
	'change-password' => array(
		array(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'trim|required|min_length[8]'
		),
		array(
			'field' => 'passwordconfirm',
			'label' => 'Password Confirm',
			'rules' => 'required|matches[password]'
		)
	),
	
);