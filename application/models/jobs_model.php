<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

    }

    public function jobs_feed($posted, $type, $username, $location = '')
    {

        if (isset($_SESSION['job_id'])) {
            $_SESSION['job_id'] = 0;

        } else {
            $_SESSION['job_id'] = 0;

        }

        $count = 0;
        $jobs_array = array();
        $CI = &get_instance();
        $this->db3 = $CI->load->database('jobs', TRUE);
        $this->db3->order_by("post_date", "desc");
        if ($type === 'all') {
            $query = $this->db3->get('jobs');
            if ($this->db3->affected_rows() > 0) {
                foreach ($query->result_array() as $result) {
                    $item = array(
                        'job_id' => $result['job_id'],
                        'job_poster' => $result['job_poster'],
                        'post_time' => $result['post_time'],
                        'post_date' => $result['post_date'],
                        'job_title' => $result['job_title'],
                        'job_status' => $result['job_status'],
                        'job_definition' => $result['job_definition'],
                        'job_type' => $result['job_type'],
                        'phone' => $result['poster_phone'],
                        'job_level' => $result['job_level'],
                        'applicant_location' => $result['applicant_location'],
                        'experience' => $result['experience'],
                        'salary' => $result['salary'],
                        'join' => $result['join'],
                        'job_poster_image' => $result['job_poster_image']

                    );
                    $query = $this->db3->get_where('applied_jobs', array('username' => $username, 'job_id' => $item['job_id']));

                    if ($query->num_rows() > 0) {
                        $item['applied'] = 'applied';
                    } else {
                        $item['applied'] = 'nonapplied';
                    }
                    if ($item['job_id'] > $_SESSION['job_id']) {

                    }
                    array_push($jobs_array, $item);
                }
                $count = count($jobs_array) - 1;
                $_SESSION['job_id'] = $jobs_array[$count]['job_id'];

                return $jobs_array;


            }
        } else {
            $array = array('job_title' => $type);

            $this->db3->like($array);
            $query = $this->db3->get('jobs');

           // $query = $this->db3->select('*')->from('jobs')->where("job_title LIKE %$val1%")->get();
            if ($query->num_rows() > 0) {
                foreach ($query->result_array() as $result) {
                    $item = array(
                        'job_id' => $result['job_id'],
                        'job_poster' => $result['job_poster'],
                        'post_time' => $result['post_time'],
                        'post_date' => $result['post_date'],
                        'job_title' => $result['job_title'],
                        'job_status' => $result['job_status'],
                        'job_definition' => $result['job_definition'],
                        'job_type' => $result['job_type'],
                        'job_level' => $result['job_level'],
                        'applicant_location' => $result['applicant_location'],
                        'experience' => $result['experience'],
                        'salary' => $result['salary'],
                        'phone' => $result['poster_phone'],
                        'location' => $result['poster_phone'],
                        'join' => $result['join'],
                        'job_poster_image' => $result['job_poster_image']

                    );


                $query2 = $this->db3->get_where('applied_jobs', array('username' => $username, 'job_id' => $item['job_id']));
                if ($query2->num_rows() > 0) {
                    $item['applied'] = 'applied';
                } else {
                    $item['applied'] = 'nonapplied';
                }
                    array_push($jobs_array, $item);
                }

                return $jobs_array;
            } else {
                return array("notfound" => 1);
            }
        }
    }

    public function job_application($username, $job_id)
    {
        $data = array('application_id' => ' ', 'job_id' => $job_id, 'username' => $username);
        $CI = &get_instance();
        $this->db3 = $CI->load->database('jobs', TRUE);
        $getter = $this->db3->get_where('applied_jobs', array('job_id' => $job_id, 'username' => $username));
        if ($getter->num_rows() > 0) {
            return 1;
        } else {
            $this->db3->insert('applied_jobs', $data);
            return 0;
        }

    }


}