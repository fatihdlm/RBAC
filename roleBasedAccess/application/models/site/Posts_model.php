<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Post_model
 *
 * @author fatih
 */
class Posts_model extends CI_Model {
    //put your code here
    public function get_posts($slug=FALSE) {
        if ($slug===FALSE) {
            $query= $this->db->get('posts');
            return $query->result();
        }
        $query= $this->db->get_where('posts',array('slug'=>$slug));
         return $query->row();
    }
}
