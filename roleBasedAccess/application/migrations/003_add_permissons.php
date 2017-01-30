<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_permissons extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'perm_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'perm_desc' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
        ));
        $this->dbforge->add_key('perm_id', TRUE);
        $this->dbforge->create_table('permissons');
    }

    public function down() {
        $this->dbforge->drop_table('permissons');
    }

}
