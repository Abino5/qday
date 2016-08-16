<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    public function index(){
        
    }

    public function get($data=array()) {

    //$q = $this->db->get_where('users',$where_array);
            //return $q;
                        return $data;

           }
}
?>
