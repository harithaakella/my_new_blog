<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_posts_table extends CI_Migration {

	public function up()
	{
		$this->config->load('migration_field', TRUE);
		$field_config = $this->config->item('migration_field');
		
		$this->dbforge->add_field(
		array(
			'id'			=> $field_config['id_field'],
			'user_id'		=> $field_config['integer_field'],
			'title'			=> $field_config['title_field'],
			'content'		=> $field_config['content_field'],
			'created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP',
			'updated_at TIMESTAMP',
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('posts');
		echo "Table posts created! \r\n";
		
		$data = [
			'user_id'		=> 1,
			'title'			=> 'Hello World!',
			'content'		=> '<p>Gag ipsum dolar sit amet asian monday gtfo angry birds. Superhero friendzoned captain nap too mainstream meme bart fap fap oh stop it, you not bad. Creepy Me Gusta basic math fap hulk mother love kitchen woman true story. Jackie Chan unlock in challenge accepted viverra dummies cuteness overload scared le friend.</p>
<p><img style="display: block; margin-left: auto; margin-right: auto;" src="http://i.imgur.com/qPPNiE3.jpg" alt="map" width="650" height="250" /></p>
<p>Ba Dumm Tss alcohol win eat final week haters gonna hate easter not okay. Dolar clinton people strangers russia happy bottom woman in the kitchen facepalm avengers. Fuck That Shit mother of god lois collection hitler avenger feel like a sir donut geek lose bacon read. Keyboard aww yeah that finals gag elephant on scumbag fun female portfolio. Right all the things iron man le derp faggot left students a. Facebook computer nother to do here rainbow why dead space.</p>
<p>Fat simpson 140% dead space essay always forever alone le me. Fuuuuuuuuuuccckkkkkk hitler derpina easter hammer faggot fun feel like a sir admire fap fap. Le girlfriend bart read hac fuck yeah creepy me gusta nerd computer. Asians meme superhero lose good guy search cuteness overload clinton nap amet morbi. Wodka eat coffee i know that feel laptop just aww yeah troll oh stop it, you. Genius college strangers jackie chan party drink russia not bad no bad boobs. True love scared geek ipsum lois genius love super rage. Men all the things vegan painfull portfolio for puking rainbows phone really? Grin poker face cereal sit win viverra father venenatis back basic math humor angry birds.</p>
<p>I See What You Did There homer why elephant mother haters gonna hate diablo 3 unlock. I Dont Get It german gentlemen dad in bacon dog le derp nother to do here sex. Right money i\'m watching u stoned blizzard now kiss high school monocle friendzoned.</p>',
		];
		
		$this->db->insert('posts', $data);
		echo "Table posts seeded! \r\n";
	}

	public function down()
	{
		$this->dbforge->drop_table('posts', TRUE);
		echo "Table posts dropped! \r\n";
	}
	
}