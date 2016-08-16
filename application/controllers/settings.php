<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

    /*
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
    public function account() {

        $this->load->view('inc/header_settings');

        $this->load->view('settings/account');

    }
    public function preference() {
        $this->load->view('settings/preference');

    }
    public function security() {
        $this->load->view('settings/security');

    }
    public function jinterest() {
        $this->load->view('settings/jinterest');

    }
    public function privacy() {
        $this->load->view('settings/privacy');

    }
    public function authentication() {
        $this->load->view('settings/authentication');

    }
    public function apis() {
        $this->load->view('settings/apis');

    }
    public function help() {
        $this->load->view('settings/help');

    }

}