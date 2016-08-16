<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sessioncheck extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        
        $session = $this->session->userdata('username');
        if(!$session){
            $sessiontimeout = "0";
        }
        else{
            $sessiontimeout = "1";
        }
        echo $sessiontimeout;
    }

}