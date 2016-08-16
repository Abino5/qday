<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {


    }

    function userpost(){
        $array = array();
        $value = $this->input->post('value');
        $type = $this->input->post('type');
        $new_password = $this->input->post('value2');
        if($type=='username'){
            $array = array('username'=>$value);
            $this->db->where('username', $this->session->userdata('username'));
            $this->db->update('users', $array);
            $afftectedRows = $this->db->affected_rows();
            if ($afftectedRows==0){
                echo '0';

            }
            else{
                $this->session->set_userdata($array);
                echo '1';

            }
        }
        else{
            if($type =='name'){

                $array = array('name'=>$value);
            }

            elseif($type=='location'){
                $array = array('location'=>$value);
            }
            elseif($type=='nationality'){
                $array = array('nationality'=>$value);
            }
            elseif($type=='email'){
                $array = array('email'=>$value);
            }
            elseif($type=='gender'){
                $array = array('gender'=>$value);
            }
            elseif($type=='phone'){
                $array = array('phone'=>$value);
            }
            elseif($type=='password'){


               $value = password_hash($value, PASSWORD_BCRYPT);
                if($this->session->userdata('password') === $value){
                    $array = array('password'=>$new_password);
                }
                else{
                    echo '0';
                    return;
                }

            }

            $this->db->where('username', $this->session->userdata('username'));
            $this->db->update('users', $array);
            $afftectedRows = $this->db->affected_rows();
            if ($afftectedRows==0){
                echo '0';

            }
            else{
                echo '1';

            }
        }



    }

}