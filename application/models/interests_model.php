<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Interests_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

    }
    public function interests($username)
    {
       $interest2 = array();
        $interest = array();
        $CI = &get_instance();
        $this->db3 = $CI->load->database('jobs', TRUE);
        $c = 1;
        $query = $this->db3->get_where('interests',array('username'=>$username));
        foreach($query->result_array() as $row){
        $interest = array('interest' => $row['interest']);
            array_push($interest2,$interest);
        ++$c;
        }
        return $interest2;
    }
    public function update($update,$username)
    {
        $CI = &get_instance();
        $this->db3 = $CI->load->database('jobs', TRUE);
        $this->db3->where_in('username', $username);
        $this->db3->delete('interests');

foreach($update as $item){
    $this->db3->set('username', $username);
    $this->db3->set('interest', $item);
    $this->db3->set('id', '');
    $this->db3->insert('interests');

}
        return $update;
    }
}