<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Posts extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'post_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'slug' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'body' => array(
                'type' => 'TEXT'
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
            ),
        ));
        $this->dbforge->add_key(array(
            'post_id'
        ));
        $this->dbforge->create_table('posts');
    }

    public function down() {
        $this->dbforge->drop_table('posts');
    }

}
