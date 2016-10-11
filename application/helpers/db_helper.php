<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Db_helper
 *
 * @codeCoverageIgnore
 */
class Db_helper {
    // Database field data types
    public $primary_key = array(
        'type' => 'MEDIUMINT',
        'constraint' => '8',
        'unsigned' => TRUE,
        'auto_increment' => TRUE
    );
    public $foreign_key = array(
        'type' => 'MEDIUMINT',
        'constraint' => '8',
        'unsigned' => TRUE,
        'null' => TRUE
    );
    public $small_int = array(
        'type' => 'TINYINT',
        'constraint' => '1',
        'unsigned' => TRUE,
        'default' => '0',
        'null' => TRUE
    );
    public $medium_int = array(
        'type' => 'MEDIUMINT',
        'constraint' => '8',
        'unsigned' => TRUE,
        'default' => '0',
        'null' => TRUE
    );
    public $medium_int_signed = array(
        'type' => 'MEDIUMINT',
        'constraint' => '8',
        'unsigned' => FALSE,
        'default' => '0',
        'null' => TRUE
    );
    public $big_int = array(
        'type' => 'INT',
        'unsigned' => TRUE,
        'default' => '0',
        'null' => TRUE
    );
    public $date_time = array(
        'type' => 'INT',
        'unsigned' => TRUE,
        'null' => TRUE
    );
    public $small_text = array(
        'type' => 'VARCHAR',
        'constraint' => '255',
        'null' => TRUE
    );
    public $medium_text = array(
        'type' => 'VARCHAR',
        'constraint' => '500',
        'null' => TRUE
    );
    public $big_text = array(
        'type' => 'TEXT',
        'null' => TRUE
    );
    public $boolean = array(
        'type' => 'TINYINT',
        'constraint' => '1',
        'unsigned' => TRUE,
        'default' => '0',
        'null' => TRUE
    );
    public $float = array(
        'type' => 'FLOAT',
        'null' => FALSE,
        'default' => '0'
    );
}
