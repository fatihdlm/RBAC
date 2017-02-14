<?php

class Pages extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function view($page = 'home') {
        echo $page;
        die("burda öldü");
        if (!file_exists(APPPATH . 'views/site/pages/' . $page . '.php')) { 
                show_404();
            }
            $data['title']= ucfirst($page);
            $this->load->view('site/inc/header',$data);
            $this->load->view('site/pages/'.$page);
            $this->load->view('site/inc/footer');
        }
    }


