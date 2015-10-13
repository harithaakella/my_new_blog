<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/* Definition for primary key (id) fields */
$config['id_field'] = array(
	'type'           => 'INT',
	'constraint'     => 11,
	'unsigned'       => TRUE,
	'auto_increment' => TRUE,
);

/* Definition for post title fields */
$config['title_field'] = array(
	'type'           => 'VARCHAR',
	'constraint'     => 200,
);

/* Definition for post content fields */
$config['content_field'] = array(
	'type'          => 'TEXT',
	'default'		=> NULL,
);


/* Definition for category name fields */
$config['category_name_field'] = array(
	'type'           => 'VARCHAR',
	'constraint'     => 100,
);

/* Definition for integer fields */
$config['integer_field'] = array(
	'type'           => 'INT',
	'constraint'     => 11,
	'unsigned'       => TRUE,
);