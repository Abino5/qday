<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Files_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

    }
    public function files($username)
    {
       $interest2 = array();
       // $interest = array();
        $CI = &get_instance();
        $this->db3 = $CI->load->database('jobs', TRUE);
      //  $c = 1;
        $query = $this->db3->get_where('files',array('user'=>$username));

        foreach($query->result_array() as $row){
            $interest = array(
                'location' => $row['location'],
                'name' => $row['name'],
                'type' => $row['type']
                );
            array_push($interest2,$interest);

        }
        return $interest2;
    }

    public function insert_file($filename,$fileext,$newname)
    {
        $fileext = str_replace(".","",$fileext);
        $CI = &get_instance();
        $this->db3 = $CI->load->database('jobs', TRUE);
        $data = array(
            'id'      => '',
            'user'         => $this->session->userdata('email'),
            'location'      => 'http://localhost/ominzy/application/user_files/'.$newname,

            'name'      => $filename,
            'type'         => $fileext
        );
        $this->db3->insert('files', $data);
       return $this->db3->insert_id();
    }
    public function del_files($files)
    {
        $CI = &get_instance();
        $this->db3 = $CI->load->database('jobs', TRUE);
        foreach($files as $item){
            $this->db3->where(array('name'=>$item,'user'=>$this->session->userdata('email')));
            $this->db3->delete('files');



        }
    }

}