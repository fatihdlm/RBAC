<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_User_Role extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'role_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE
            ),
            'user_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE
            ),
        ));
       $this->dbforge->add_key(array(
           'user_id',
           'role_id'
       ));
        $this->dbforge->create_table('user_role');
    }

    public function down() {
        $this->dbforge->drop_table('user_role');
    }

}
