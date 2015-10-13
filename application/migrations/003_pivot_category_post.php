<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Pivot_category_post extends CI_Migration {

	public function up()
	{
		$this->config->load('migration_field', TRUE);
		$field_config = $this->config->item('migration_field');

		$this->dbforge->add_field(
		array(
			'id'			=> $field_config['id_field'],
			'category_id'	=> $field_config['integer_field'],
			'post_id'		=> $field_config['integer_field'],
			
		));
		
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('category_post');
		echo "Table pivot category_post created! \r\n";
	}
	
	public function down()
	{
		$this->dbforge->drop_table('category_post', TRUE);
		echo "Table pivot category_post dropped! \r\n";
	}

}