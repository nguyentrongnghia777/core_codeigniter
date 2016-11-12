<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Category extends CI_Migration
{
	function __construct() {
		$this->load->helper('db_helper');
		$this->fields = new Db_helper();
	}

	public function up() {

		// Table structure for table 'categorys'
		$this->dbforge->add_field(array(
			'id' => $this->fields->primary_key,
			'name' => $this->fields->small_text,
			'discription' => $this->fields->big_text,
			'active'=> $this->fields->small_int
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table(Constants_helper::TBL_CATEGORYS, FALSE, array('ENGINE' => 'MYISAM'));

		// Dumping data for table 'categorys'
		$this->dumping_data();
	}
	
	public function down() {
		$this->dbforge->drop_table(Constants_helper::TBL_CATEGORYS, TRUE);
	}

	private function dumping_data() {
		$data = [];
		for ($i = 0; $i < 5; $i++) {
			array_push($data, array(
				'name' => 'LAPTOP' . $i,
				'discription' => 'This is discription for catelory ',
				'active'=> '1'
			));
		}
		$this->db->insert_batch(Constants_helper::TBL_CATEGORYS, $data);
	}
}
