<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_comments_table extends CI_Migration {

	public function up()
	{
		$this->config->load('migration_field', TRUE);
		$field_config = $this->config->item('migration_field');
		
		$this->dbforge->add_field(
		array(
			'id'			=> $field_config['id_field'],
			'name'			=> $field_config['category_name_field'],
			'post_id'		=> $field_config['integer_field'],
			'content'		=> $field_config['content_field'],
			'created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP',
			'updated_at TIMESTAMP',

		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('comments');
		echo "Table comments created! \r\n";
		
		$data = [
			'name'			=> 'John Doe',
			'post_id'		=> 1,
			'content'		=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
		];
		$this->db->insert('comments', $data);
		echo "Table comments seeded! \r\n";
	}

	public function down()
	{
		$this->dbforge->drop_table('comments');
		echo "Table comments dropped! \r\n";
	}
	
}