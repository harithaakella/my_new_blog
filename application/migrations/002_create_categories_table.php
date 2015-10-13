<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_categories_table extends CI_Migration {

	public function up()
	{
		$this->config->load('migration_field', TRUE);
		$field_config = $this->config->item('migration_field');
		
		$this->dbforge->add_field(
		array(
			'id'			=> $field_config['id_field'],
			'name'			=> $field_config['category_name_field'],
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('categories');
		echo "Table categories created! \r\n";
		
		// Dumping data for table 'users'
		$data = array(
			['id' => '1','name' => 'Uncategorised'],
			['id' => '2','name' => 'Personal'],
			['id' => '3','name' => 'Tutorial'],
			['id' => '4','name' => 'Review'],
		);
		$this->db->insert_batch('categories', $data);
		echo "Table categories seeded! \r\n";
	}

	public function down()
	{
		$this->dbforge->drop_table('categories');
		echo "Table categories dropped! \r\n";
	}
	
}