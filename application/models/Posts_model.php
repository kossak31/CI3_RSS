<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Posts_model extends CI_Model {
     
    
    function getPosts($limit = NULL)
    {
        return $this->db->get('posts', $limit);
    }
}