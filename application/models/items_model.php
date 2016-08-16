<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Items_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

    }
    public function items($username)
    {
        $interest2 = array();
        // $interest = array();
        $CI = &get_instance();
        $this->db4 = $CI->load->database('market', TRUE);
        //  $c = 1;
        $query = $this->db4->get_where('items',array('username'=>$username));

        foreach($query->result_array() as $row){
            $interest = array(
                'location' => $row['location'],
                'price' => $row['price'],
                'sold' => $row['sold'],
                'definition' => $row['definition'],
                'title' => $row['title'],
                'itemid' => $row['item_id']
            );
            array_push($interest2,$interest);

        }
        return $interest2;
    }
    public function item_detail($item_id)
    {
        $CI = &get_instance();
        $this->db4 = $CI->load->database('market', TRUE);
        $q = $this->db4->get_where('items',array('item_id'=>$item_id));
foreach($q->result_array() as $item){
    $query = array('definition'=>$item['definition'],
        'title' => $item['title'],
        'price' => $item['price'],
        'location' => $item['location'],
        'sold' => $item['sold'],
        'date' => $item['date'],
        'item_id' => $item['item_id']
        );
}

        return $query;
    }

}