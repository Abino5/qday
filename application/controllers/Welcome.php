<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
        //echo base_url('assets/stylesheet.css');
        $session = $this->session->userdata('username');
        if($session){
                header('Location: ' . base_url('home').'/news/');

        }
        else{
            $this->load->model('News_model');
        

$news = $this->News_model->get();
            
            $title_array = array('title'=> 'Ominzy - The biggest Gulf Network');
        $this->load->view('inc/header_view',$title_array);
        $array = array('news' => $news);

        $this->load->view('welcome/welcome', $array);
        $this->load->view('inc/footer_view');  
        }
      
    }

    public function login() {
        $this->load->model('Login_model');
        $login = $this->Login_model->get();
echo $login;
        
    }

}

?>