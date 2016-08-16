<?php defined('BASEPATH') OR exit ('No direct script access allowed');
require APPPATH . '\libraries\REST_Controller.php';

class Api extends REST_Controller { function __construct ()
{
    parent::__construct ();
}
    function student_get ()
    {
        $this->response('My App is RESTful now');
    }
    function student_post ()
    {
        $this->response('My App is RESTful now');
    }
    function student_put ()
    {
        $this->response('My App is RESTful now');
    }
    function student_delete ()
    {
        $this->response('My App is RESTful now');
    }
    function news_get ()
    {
        $this->response('My App is RESTful now');
    }
    
    
}