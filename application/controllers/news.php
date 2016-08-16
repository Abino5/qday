<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index($news = null)
    {


        $username = $this->session->userdata('username');
        //$array = array('username' => $username);

        //$temp = $this->news($news);
        $query = $this->db->get_where('users', array('username' => $username), '0', '0');

        foreach($query->result_array() as $row) {
            $array = array(
                'username' => $row['username'],
                'name' => $row['name']
            );
            $title_array = array('title' => 'Ominzy');
            $this->load->view('inc/header_view', $title_array);
            $this->load->view('home/home', $array);
            $this->load->view('inc/footer_view');

        }

    }
    }