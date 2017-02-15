<?php

class Posts extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
      
        $data['title'] = 'Latest Posts';
        $this->load->view('site/inc/header', $data);
        $this->load->view('site/posts/index');
        $this->load->view('site/inc/footer');
    }

}
