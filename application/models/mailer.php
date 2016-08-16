<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mailer extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    public function index(){
        
    }
    public function mailer($data=array()){
        $phone=$data['phone']; 
                $name=$data['name'];
        $char = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';$token = ''; $desired_length = 5;
         for( $i=0; $i < $desired_length; $i++ ){
         $token .= $char[rand(0, strlen($char) - 1)]; 
         }
         $data['phone'] = $phone;
                 $data['name'] = $name;
        // this line loads the library 
                 include(APPPATH.'libraries\Twilio.php');
                 $account_sid = 'ACbec211a500d99f271433120227138330'; 
$auth_token = 'a2e3ee70cb11f2072b5bd13e38b75ad3';
$version = "2010-04-01";
                 $client = new Services_Twilio($account_sid, $auth_token, $version);
 
    try {
        // Initiate a new outbound call
        $call = $client->account->calls->create(
            '+50516625', // The number of the phone initiating the call
            $phone, // The number of the phone receiving call
            'http://twimlets.com/echo?Twiml=Hello%2C%20Your%20ominzy%20activation%20code%20is&'. $token // The URL Twilio will request when the call is answered
        );
        //echo 'Started call: ' . $call->sid;
    } catch (Exception $e) {
       // echo 'Error: ' . $e->getMessage();
    }

$client = new Services_Twilio($account_sid, $auth_token); 
$mynumber = '+12019031169';
$message = "Welcome $name! Your Ominzy activation code is: $token";
$client->account->messages->sendMessage($mynumber, $phone, $message);

 
echo $token;                
 
    }
}