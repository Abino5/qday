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
        $job_id = array('job_id'=>0);
        if($this->session->userdata($job_id)){
            $this->session->set_userdata('job_id', $job_id);
        }
        else{
            $this->session->set_userdata($job_id);

        }
        if($news===null){
            $news="politics";
        }
        header('Location: ' . base_url('home').'/news/');
            
            }



    public function news($news='')
    {


        $username = $this->session->userdata('username');
        if(!$username){
            header('Location: ' . base_url());
        }



            $array = array(
                
                'type' => 'politics',
                'mode' => 'news'
                );

if($news==''){
    $title_array = array('title' => 'Ominzy');
    $this->load->view('inc/header_view', $title_array);
    $this->load->view('home/inc/header', $title_array);
    $this->load->view('home/home', $array);
    $this->load->view('inc/footerIII');

}
else{
    $this->load->model('Rss_model');
    $result = $this->Rss_model->news_detail($news);
if($result==='error'){
    show_404();
}
    else{
        $title_array = array('title' => 'Ominzy');
        $this->load->view('inc/header_view', $title_array);
        $this->load->view('home/inc/header', $title_array);
        $this->load->view('home/news/'.$result, $array);
        $this->load->view('inc/footerV');
    }


}




        }


    /*
    function rss_news($news){
        $this->load->model('Rss_model');
        $news = $this->Rss_model->rss_news($news);
        return $news;
    }
    */
    public function jobs()
    {
        $location = $this->input->post('job-location');
        $title = $this->input->post('job-title');

        // This will evaluate to TRUE so the text will be printed.
        if (isset($location)) {
            $location = 'all';
        }
        else{

        }
        if (isset($title)) {

        }
        else{
$title= 'all';
        }



        $username = $this->session->userdata('username');
        if(!$username){
            header('Location: ' . base_url());
        }

        //$temp = $this->rss_news($news);
        $query = $this->db->get_where('users', array('username' => $username), '0', '0');

        foreach($query->result_array() as $row) {
            $array = array(
                'username' => $username,
                'name' => $row['name'],
                'type' => $title,
                'mode' => 'jobs',
                'location' => $location
            );
        }
             $title_array = array('title' => 'Ominzy');
            $this->load->view('inc/header_view', $title_array);
        $this->load->view('home/inc/header');
            $this->load->view('jobs/jobs', $array);
            $this->load->view('inc/footerIIII');


    }



    public function uploader()
    {
        $this->load->view('uploader/index');

    }




    public function upload()
    {
        if(isset($_FILES["FileInput"]) && $_FILES["FileInput"]["error"]== UPLOAD_ERR_OK)
        {

            ############ Edit settings ##############
            $UploadDirectory	=  dirname(__FILE__); //specify upload directory ends with / (slash)
            ##########################################
            $UploadDirectory = substr($UploadDirectory, 0, -12);
            $UploadDirectory = $UploadDirectory . "/user_files/";
            /*
            Note : You will run into errors or blank page if "memory_limit" or "upload_max_filesize" is set to low in "php.ini".
            Open "php.ini" file, and search for "memory_limit" or "upload_max_filesize" limit
            and set them adequately, also check "post_max_size".
            */

            //check if this is an ajax request



            //Is file size is less than allowed size.
            if ($_FILES["FileInput"]["size"] > 5242880) {
                die("File size is too big!");
            }

            //allowed file type Server side check
            switch(strtolower($_FILES['FileInput']['type']))
            {
                //allowed file types

                case 'application/pdf':
                case 'application/msword':
                case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':

                    break;
                default:
                    die('Unsupported File!'); //output error
            }

            $File_Name          = strtolower($_FILES['FileInput']['name']);
            $File_Ext           = substr($File_Name, strrpos($File_Name, '.')); //get file extention
            $Random_Number      = rand(0, 10000); //Random number to be added to name.
            $NewFileName 		= $Random_Number.$File_Ext; //new file name

            if(move_uploaded_file($_FILES['FileInput']['tmp_name'], $UploadDirectory.$NewFileName ))
            {

                $this->load->model('Files_model');
                $temp = $this->Files_model->insert_file($File_Name,$File_Ext,$NewFileName);
                die('Success! File Uploaded.'.'\n'.$temp);
            }else{
                die('error uploading File!');
            }

        }
        else
        {
            die('Something wrong with upload! Is "upload_max_filesize" set correctly?');
        }
    }

    public function market($item='')
    {
        $array = array(

            'type' => 'all',
            'mode' => 'market'
        );
        if($item===''){
            $title_array = array('title' => 'Ominzy');
            $this->load->view('inc/header_view', $title_array);
            $this->load->view('home/inc/header', $title_array);
            $this->load->view('market/market', $array);
            $this->load->view('inc/footerIII');
        }
        else{
            $this->load->model('Items_model');
            $items = $this->Items_model->item_detail($item);

            $title_array = array('title' => 'Ominzy');

            $this->load->view('inc/header_view', $title_array);
            $this->load->view('home/inc/header', $array);
            $this->load->view('market/item_detail', $items);
            $this->load->view('inc/item_footer');
        }
    }

}