<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Install_ion_auth extends CI_Migration
{
    function __construct()
    {
        $this->load->helper('db_helper');
        $this->fields = new Db_helper();
    }
    public function up()
    {
        // Drop table 'groups' if it exists
        $this->dbforge->drop_table(Constants_helper::TBL_GROUPS, true);

        // Table structure for table 'groups'
        $this->dbforge->add_field(array(
            'id' => $this->fields->primary_key,
            'name' => $this->fields->small_text,
            'description' => $this->fields->small_text
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table(Constants_helper::TBL_GROUPS, FALSE, array('ENGINE' => 'MYISAM'));

        // Dumping data for table 'groups'
        $data = array(
            array(
                'id' => '1',
                'name' => Constants_helper::ROLES_ADMIN,
                'description' => 'Administrator'
            ),
            array(
                'id' => '2',
                'name' => Constants_helper::ROLES_MEMBER,
                'description' => 'General User'
            )
        );
        $this->db->insert_batch(Constants_helper::TBL_GROUPS, $data);

        // Drop table 'users' if it exists
        $this->dbforge->drop_table(Constants_helper::TBL_USERS, true);

        // Table structure for table 'users'
        $this->dbforge->add_field(array(
            'id' => $this->fields->primary_key,
            'ip_address' => array(
                'type' => 'VARCHAR',
                'constraint' => '16'
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '80',
            ),
            'salt' => array(
                'type' => 'VARCHAR',
                'constraint' => '40',
                'null' => TRUE
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'activation_code' => array(
                'type' => 'VARCHAR',
                'constraint' => '40',
                'null' => TRUE
            ),
            'forgotten_password_code' => array(
                'type' => 'VARCHAR',
                'constraint' => '40',
                'null' => TRUE
            ),
            'forgotten_password_time' => array(
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => TRUE,
                'null' => TRUE
            ),
            'remember_code' => array(
                'type' => 'VARCHAR',
                'constraint' => '40',
                'null' => TRUE
            ),
            'created_on' => array(
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => TRUE,
            ),
            'last_login' => array(
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => TRUE,
                'null' => TRUE
            ),
            'active' => array(
                'type' => 'TINYINT',
                'constraint' => '1',
                'unsigned' => TRUE,
                'null' => TRUE
            ),
            'full_name' => $this->fields->small_text,
            'avatar' => $this->fields->medium_text,
            'facebook_id' => $this->fields->small_text,
            'google_id' => $this->fields->small_text,
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table(Constants_helper::TBL_USERS, FALSE, array('ENGINE' => 'MYISAM'));

        // Dumping data for table 'users'
        $data = array(
            'id' => '1',
            'ip_address' => '127.0.0.1',
            'username' => 'administrator',
            'password' => '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36',
            'salt' => '',
            'email' => 'admin@admin.com',
            'activation_code' => '',
            'forgotten_password_code' => NULL,
            'created_on' => '1268889823',
            'last_login' => '1268889823',
            'active' => '1',
            'full_name' => 'admin',
        );
        $this->db->insert(Constants_helper::TBL_USERS, $data);

        // Drop table 'users_groups' if it exists
        $this->dbforge->drop_table(Constants_helper::TBL_USERS_GROUPS, true);

        // Table structure for table 'users_groups'
        $this->dbforge->add_field(array(
            'id' => $this->fields->primary_key,
            'user_id' => $this->fields->medium_int,
            'group_id' => $this->fields->medium_int
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table(Constants_helper::TBL_USERS_GROUPS, FALSE, array('ENGINE' => 'MYISAM'));

        // Dumping data for table 'users_groups'
        $data = array(
            array(
                'id' => '1',
                'user_id' => '1',
                'group_id' => '1',
            ),
            array(
                'id' => '2',
                'user_id' => '1',
                'group_id' => '2',
            )
        );
        $this->db->insert_batch(Constants_helper::TBL_USERS_GROUPS, $data);

        // Drop table 'login_attempts' if it exists
        $this->dbforge->drop_table(Constants_helper::TBL_LOGIN_ATTEMPTS, true);

        // Table structure for table 'login_attempts'
        $this->dbforge->add_field(array(
            'id' => $this->fields->primary_key,
            'ip_address' => array(
                'type' => 'VARBINARY',
                'constraint' => '16'
            ),
            'login' => $this->fields->small_text,
            'time' => $this->fields->big_int,
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table(Constants_helper::TBL_LOGIN_ATTEMPTS, FALSE, array('ENGINE' => 'MYISAM'));

    }

    public function down()
    {
        $this->dbforge->drop_table(Constants_helper::TBL_USERS, true);
        $this->dbforge->drop_table(Constants_helper::TBL_GROUPS, true);
        $this->dbforge->drop_table(Constants_helper::TBL_USERS_GROUPS, true);
        $this->dbforge->drop_table(Constants_helper::TBL_LOGIN_ATTEMPTS, true);
    }
}
