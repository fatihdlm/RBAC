<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_Controller
 *
 * @author fatih
 */
class MY_Controller extends CI_Controller{
    public $data=array();
    public function __construct() {
        parent::__construct();
        $this->data['site_name']="fatih";
        $this->data['errors']=array();
    }
}
