<?php



defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {
public function __construct() {
        parent::__construct();
    }

    
    public function index(){
        
    }
    
    public function activation(){
        $key = "";
        $token = $this->input->post('token');
        $username = $this->input->post('username');
        
        $query = $this->db->query("SELECT token FROM users WHERE token='$token' AND username='$username'");
        //$row = $query->result_array();
        if(!$query){
            $key = "0";
        }
        else{
            $key = "1";
        }
    }
    public function check(){
        $username2 = "";
        $email2 = "";
        $phone2 = "";
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        
        $query = $this->db->query("SELECT email,username,phone FROM users WHERE email='$email' OR username='$username' OR phone='$phone'");
    foreach ($query->result() as $rower)
{
$username2 = $rower->username;
$email2 = $rower->email;
$phone2 = $rower->phone;
        }
        echo $username2.";".$email2.";".$phone2;
        
    }
    public function news_up(){
    $image = $this->input->post('image');
        $title = $this->input->post('title');
        $description = $this->input->post('description');

        $pubdate = $this->input->post('pubdate');
        $this->load->model('Rss_model');
        $news = $this->Rss_model->rss_news($title,$image,$description,$pubdate);

        $title_array = array('title' => 'Ominzy');
        $this->load->view('inc/header_view', $title_array);
        $this->load->view('home/news/'.$news);
        $this->load->view('inc/footerIII');
    }
     public function register(){
         $this->load->helper(array('form', 'url'));
         $this->load->library('form_validation');
         $result = "";
     $email = $this->input->post('email');
        $username = $this->input->post('username');$password = $this->input->post('password');
        $phone = $this->input->post('phone');
        $nationality = $this->input->post('nationality');
        $location = $this->input->post('location');
        $temp1 = $this->input->post('firstname');
        $temp2 = $this->input->post('lastname');$name = $temp1 . " " . $temp2;
        $gender = $this->input->post('gender');$token = $this->input->post('token');
         $ctype = $this->input->post('coursetype');$clevel = $this->input->post('courselevel');
         $cmode = $this->input->post('coursemode');$smonth = $this->input->post('startmonth');
         $weekly = $this->input->post('weekly');$daily = $this->input->post('daily');$tmode = $this->input->post('teachertype');
$password = password_hash($password, PASSWORD_BCRYPT);

         $user_data = array(
                 'user_id' => ' ' ,
                 'email' => $email ,
                 'password' => $password,
             'username' => $username,
             'nationality' => $nationality ,
             'name' => $name,
             'gender' => $gender ,
             'location' => $location,
             'phone' => $phone,
             'token' => $token,
             'coursetype' => $ctype,
             'coursemode' => $cmode,
             'courselevel' => $clevel,
             'startmonth' => $smonth,
             'weekly' => $weekly,
             'daily' => $daily,
             'teachertype' => $tmode,
             'payment' => '0'
             );
            $salt1 = 'Sjdh^&ds';
         $salt2 = 'ds(0dC@f#';
        $password = md5($salt1.$password.$salt2);
         $this->form_validation->set_rules('username', 'Username', 'required');
         $this->form_validation->set_rules('password', 'Password', 'required');
         $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
         $this->form_validation->set_rules('phone', 'Phone', 'required');
if($this->form_validation->run() == FALSE){
    $result = '2';
    echo validation_errors();
}
         else{


             $query =$this->db->insert('users',$user_data);

             if(!$query){
                 $result = "0";
                 echo $result;
             }
             else{
                 $result = "1";
                 echo $result;
             }

         }

         

         }
 public function token(){
            $email = $this->input->post('email');
            $name = $this->input->post('name');
     $phone = $this->input->post('phone');
             $data = array('phone'=>$phone,'name'=>$name);
        //$this->load->model('mailer');
            //$token = $this->mailer->mailer($data);
     $char = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';$token = ''; $desired_length = 5;
     for( $i=0; $i < $desired_length; $i++ ){
         $token .= $char[rand(0, strlen($char) - 1)];
     }
         $subject = "Welcome to Ominzy";
         
         $message = "<b>Hello $name, your activation code is:</b>";
         $message .= "<h1 color='red'>$token</h1>";
         
         $header = "From:abeomer@gmail.com \r\n";
         
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($email,$subject,$message,$header);
         
         if( $retval == true ) {
           
         }else {
           
         }
            echo $token;
          /*
          
         
         $message = '<html><body>';
$message .= '<h1>Hello,this is your activation code: </h1>'. $token;
$message .= '</body></html>';
      
 $subject = "Activation Code";
 
 $headers = "From: " . 'no-reply@lulepro.com' . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail($email, $subject, $message, $headers);
  
  $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'ssl://smtp.gmail.com';
    $config['smtp_port'] = '465';$config['smtp_user'] = 'no-reply@lulepro.com';
    $config['smtp_from_name'] = 'Administrator';$config['smtp_pass'] = 'Lule_Admin01';
    $config['wordwrap'] = TRUE;
    $config['newline'] = "\r\n";
    $config['mailtype'] = 'html';   
$this->load->library('email', $config);
$this->email->set_newline("\r\n");
 $this->email->from($config['smtp_user'], 'Administrator');
$this->email->to($email);$this->email->subject('Activation Code');
$this->email->message($message);$this->email->send();echo $token;
//echo $this->email->print_debugger();
 */
   
         }
    function tooltip(){
    $username = $this->input->post('username');
    $this->load->model('Rss_model');
    $tooltip = $this->Rss_model->tooltip($username);
    echo $tooltip;
}

    function notifications(){

        $username = $this->input->post('username');

       $this->load->model('Rss_model');
        $notification = $this->Rss_model->notifications($username);
        echo json_encode($notification);
    }
    function reminders(){

        $username = $this->input->post('username');

        $this->load->model('Rss_model');
        $notification = $this->Rss_model->reminders($username);
        echo json_encode($notification);
    }


   public function set_session(){
       $email = $this->input->post('email');
       $password = $this->input->post('password');
       $username = $this->input->post('username');
        $session_data = array(
                'email' => $email,
                'password' => $password,
                'username' => $username

            );
       if($this->session->userdata($session_data)){
           $this->session->set_userdata($session_data);

       }
       else{
           $this->session->set_userdata($session_data);

       }
   }

    public function news_feed(){
       $posted = $this->input->post('differ');
      $type = $this->input->post('type');

      $this->load->model('Rss_model');
      $news = $this->Rss_model->rss_news($posted,$type);
echo json_encode($news);
    }
    public function jobs_feed(){
        $posted = $this->input->post('differ');
        $type = $this->input->post('type');
        $username = $this->input->post('username');
        $location = $this->input->post('location');
        $this->load->model('Jobs_model');
     $news = $this->Jobs_model->jobs_feed($posted,$type,$username,$location);
        echo json_encode($news);
    }
    public function job_insert(){
        $posted = $this->input->post('job_id');
        $username = $this->input->post('username');
        $this->load->model('Jobs_model');
        $news = $this->Jobs_model->job_application($username,$posted);
        echo json_encode($news);
    }

    public function news_feed_updates(){



        $posted = $this->input->post('differ');
        $type = $this->input->post('type');

        $this->load->model('Rss_model');
        $news = $this->Rss_model->rss_news($posted,$type);
        echo json_encode($news);
    }

    public function ad_loader(){
        $this->load->model('Addloader_model');
        $ads = $this->Addloader_model->add_loader();
        echo json_encode($ads) ;
    }
    public function interest(){
        $username = $this->input->post('username');
        $this->load->model('Interests_model');
        $interests = $this->Interests_model->interests($username);
        echo json_encode($interests);
    }
    public function files(){
        $username = $this->input->post('username');
        $this->load->model('Files_model');
        $files = $this->Files_model->files($username);
        echo json_encode($files);
    }
    public function items(){
       $username = $this->input->post('username');
        $this->load->model('Items_model');
        $items = $this->Items_model->items($username);
        echo json_encode($items);
    }

    public function update_interest(){
        $interests = $this->input->post('interests');
        $username = $this->input->post('username');
        $this->load->model('Interests_model');
        $items = $this->Interests_model->update($interests,$username);
        echo json_encode($items);
    }
    public function del_files(){
        $interests = $this->input->post('files');
        $this->load->model('Files_model');
        $items = $this->Files_model->del_files($interests);
        echo json_encode($items);
    }

}