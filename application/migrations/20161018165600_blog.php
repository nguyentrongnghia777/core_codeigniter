<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Blog extends CI_Migration
{
    function __construct() {
        $this->load->helper('db_helper');
        $this->fields = new Db_helper();
    }

    function up() {
        // Drop table 'blogs' if it exists
        $this->dbforge->drop_table(Constants_helper::TBL_BLOGS, TRUE);

        // Table structure for table 'groups'
        $this->dbforge->add_field(array(
        	'id' => $this->fields->primary_key,
        	'title' => $this->fields->medium_text,
        	'content' => $this->fields->big_text,
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table(Constants_helper::TBL_BLOGS, FALSE, array('ENGINE' => 'MYISAM'));

        // Dumping data for table 'blogs'
        $this->dumping_data_blogs();
    }

    function down() {
        $this->dbforge->drop_table(Constants_helper::TBL_BLOGS, TRUE);
    }

    function dumping_data_blogs() {
        $data = [];
        for ($i = 0; $i < 20; $i++) {
            array_push($data, array(
                'title' => 'title blog ' . $i,
                'content' => 'content blog content blog content blog content blog content blog content blog',
            ));
        }
        $this->db->insert_batch(Constants_helper::TBL_BLOGS, $data);
    }
}