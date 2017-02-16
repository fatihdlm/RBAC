<?php

class Posts extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('site/Posts_model', 'pmodel');
    }

    public function index() {

        $data['title'] = 'Latest Posts';
        $data['posts'] = $this->pmodel->get_posts();
        $this->load->view('site/inc/header', $data);
        $this->load->view('site/posts/index');
        $this->load->view('site/inc/footer');
    }

    public function view($slug = NULL) {
        $data['post'] = $this->pmodel->get_posts($slug);
        if (empty($data['post'])) {
            show_404();
        }
        $data['title'] = 'Latest Posts';
        $this->load->view('site/inc/header', $data);
        $this->load->view('site/posts/view');
        $this->load->view('site/inc/footer');
    }

}
