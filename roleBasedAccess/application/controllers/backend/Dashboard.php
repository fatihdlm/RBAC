<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dashboart
 *
 * @author fatih
 */
class Dashboard extends Backend_Controller {

    //put your code here
    public function dash() {
        $this->load->view('admin/inc/head');
        $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/main');
        $this->load->view('admin/inc/footer');
    }

    public function pages($page="main") {
         $this->load->view('admin/inc/head');
        $this->load->view('admin/inc/header');
        $this->load->view('admin/pages/'.$page);
        $this->load->view('admin/inc/footer');
    }
    public function users($page="main") {
         $this->load->view('admin/inc/head');
        $this->load->view('admin/inc/header');
        $this->load->view('admin/users/'.$page);
        $this->load->view('admin/inc/footer');
    }
    public function posts($page="main") {
         $this->load->view('admin/inc/head');
        $this->load->view('admin/inc/header');
        $this->load->view('admin/posts/'.$page);
        $this->load->view('admin/inc/footer');
    }

}
