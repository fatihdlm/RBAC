<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Role_Perm extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'role_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE
            ),
            'perm_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE
            ),
        ));
       $this->dbforge->add_key(array(
           'perm_id',
           'role_id'
       ));
        $this->dbforge->create_table('role_perm');
    }

    public function down() {
        $this->dbforge->drop_table('role_perm');
    }

}
