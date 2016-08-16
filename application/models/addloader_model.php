<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Addloader_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function add_loader()
    {
        $x=0;
        global $ad_array;
        $ad_array = array();

        $this->db->order_by('code', 'RANDOM');
        $this->db->limit(5);
        $ad_query = $this->db->get('advertisement');



        foreach($ad_query->result() as $ad_row){
            $ad_array[$x] = array(
                'adname' => $ad_row->adname,
                'adlink' => $ad_row->adlink,
                'admotto' => $ad_row->admotto,
                'adtext' => $ad_row->adtext,
                'adpic' => $ad_row->adpic
            );
            $x = $x+1;
        }
return $ad_array;
    }
}