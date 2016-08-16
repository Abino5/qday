<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

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

    public function login() {

        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $query = $this->db->get_where('users', array('email' => $email, 'password'=>$password));
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row)
            {
                $username = $row->username;
                $password = $row->password;
                $location = $row->location;
                $phone = $row->phone;
                $name = $row->name;
                $email = $row->email;
                $profilebgimage = $row->profilebgimage;
                $profileuserimage = $row->profileuserimage;
                $name2 = explode(" ", $name);
                $firstname = $name2[0];
                $lastname = $name2[1];

                $nationality = $row->nationality;
            }
            $assoc = "1";
            $session_data = array(
                'email' => $email,
                'password' => $password,
                'username' => $username,
                'nationality' => $nationality,
                'location' => $location,
                'firstname' => $firstname,
                'lastname' => $lastname,
                'phone' => $phone,
                'profilebgimage' => $profilebgimage,
                'profileuserimage' => $profileuserimage,



            );
            $this->session->set_userdata($session_data);
            $assoc='1';

        } else {
            $assoc ="0";
        }
        echo $assoc;
}


public function country(){
    
    $country = $this->input->post('country');
    $query = $this->db->query("SELECT phonecode FROM country WHERE nicename='$country'");
        $rowr = $query->result_array();
        foreach ($query->result() as $row)
{
$area_code = $row->phonecode;
        }
        echo $area_code;
}

}

?>
