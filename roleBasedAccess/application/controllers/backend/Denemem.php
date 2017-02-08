<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Denemem
 *
 * @author fatih
 */
class Denemem  extends CI_Controller{
    //put your code here
    
    public function index() {
        echo "param";
    }
    public function yaz($param,$param1,$param2) {
        echo $param;
        echo $param1."<br>";
        echo $param2."<br>";
    }
}
