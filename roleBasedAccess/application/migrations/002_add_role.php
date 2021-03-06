<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Role extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'role_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'role_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
        ));
        $this->dbforge->add_key('role_id', TRUE);
        $this->dbforge->create_table('roles');
    }

    public function down() {
        $this->dbforge->drop_table('roles');
    }

}
