<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rss_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function rss_news($posted, $type)
    {
        global $temp, $container, $a, $r, $pubdata_database_last, $new_array, $new_array2, $new_array3;
        $new_array = array();
        $new_array3 = array();
        $container = array();
        $temp = 0;
        $a = 0;
        $r=0;
        $new_array2 = array();
// select pubDate column from database for later comparison to avoid duplicates
        $CI = &get_instance();
        $this->db2 = $CI->load->database('news', TRUE);
        if ($type === "sports") {
            $xml = 'http://www.goal.com/en-us/feeds/news?fmt=rss&ICID=HP' ;
            $xmlDoc = simplexml_load_file($xml);

            foreach($xmlDoc->channel->item as $item) {
                $title= $item->title;
                $link= $item->link;
                $pubdate = $item->pubDate;

                $description= $item->description;
                $description= strstr($description, '<p');
                    $img = $item->enclosure['url'];



                $timestamp = $this->timestamp_fix($pubdate);
                $item = array(
                    'image' =>  $img,
                    'description' => $description,
                    'title' => $title,
                    'link' => $link,
                    'pubdate' => $timestamp


                );
                $insert_query = $this->db2->insert_string('sports', $item);
                $insert_query = str_replace('INSERT INTO', 'INSERT IGNORE INTO', $insert_query);
                $this->db2->query($insert_query);
                if ($this->db2->affected_rows() > 0) {
                    array_push($new_array, $item);
                }


            }
            if ($posted === '0') {

                // $this->db->order_by("pubdate","desc");
                // $ad_query = $this->db->get('advertisement');


                $this->db2->order_by("pubdate", "desc");
                $sorter = $this->db2->get("sports");


                foreach ($sorter->result_array() as $sort) {
                    $item2 = array(
                        'image' => $sort['image'],
                        'description' => $sort['description'],
                        'title' => $sort['title'],
                        'link' => $sort['link'],
                        'pubdate' => $sort['pubdate']
                    );

                    array_push($new_array2, $item2);

                }
                return $new_array2;
            } else {
                return $new_array;
            }

        } elseif ($type === "politics") {
            $description ='';

            $xml = 'http://www.gulf-times.com/Rss/Index';
            $xmlDoc = simplexml_load_file($xml);
            $ns = $xmlDoc->getNamespaces(true);
            foreach($xmlDoc->channel->item as $item) {
                $title= $item->title;
                $link= $item->link;
                $pubdate = $item->pubDate;
                $img = $item->enclosure['url'];
                $content = $item->children($ns['content']);
                $desc = $content->encoded;
                $description = strstr($desc, '<br/>');
             //   foreach($item->description as $desc){


                  //  $img = preg_replace('/\s+/', '', $img);
                  //  $img = substr($img, 0, strpos($img, "\"wi"));
               //     $description =  strstr($description, '<p><small>');
                    // $description = substr($description, 13);
                   // $img =  strstr($img, 'imgsrc');
                   // $img = substr($img, 8);

           //    }
                $timestamp = $pubdate;
                $item = array(
                    'image' =>  $img,
                    'description' => $description,
                    'title' => $title,
                    'link' => $link,
                    'pubdate' => $timestamp


                );
                array_push($new_array, $item);




            }
            $i2 = count($new_array)-1;
            for($i = $i2;$i>-1;$i--){
                $insert_query = $this->db2->insert_string('news', $new_array[$i]);
                $insert_query = str_replace('INSERT INTO', 'INSERT IGNORE INTO', $insert_query);
                $this->db2->query($insert_query);
            }




                // $this->db->order_by("pubdate","desc");
                // $ad_query = $this->db->get('advertisement');


                $this->db2->order_by("id", "desc");
                $sorter = $this->db2->get("news");


                foreach ($sorter->result_array() as $sort) {
                    $item2 = array(
                        'image' => $sort['image'],
                        'description' => $sort['description'],
                        'title' => $sort['title'],
                        'link' => $sort['link'],
                        'pubdate' => $sort['pubdate']
                    );

                    array_push($new_array2, $item2);

                }
                return $new_array2;

            /*
             *
             *  $xml = 'http://www.buzzfeed.com/politics.xml';
            $xmlDoc = simplexml_load_file($xml);
            foreach($xmlDoc->channel->item as $item) {
                $title= $item->title;
                $link= $item->link;
                $pubdate = $item->pubDate;
        foreach($item->description as $desc){

                $img = $desc;
            $description = $desc;
            $img = preg_replace('/\s+/', '', $img);
            $img = substr($img, 0, strpos($img, "\"wi"));
$description =  strstr($description, '<p><small>');
           // $description = substr($description, 13);
          $img =  strstr($img, 'imgsrc');
            $img = substr($img, 8);

        }
 $timestamp = $this->timestamp_fix($pubdate);
                $item = array(
                    'image' =>  $img,
                    'description' => $description,
                    'title' => $title,
                    'link' => $link,
                    'pubdate' => $timestamp


                );
                $insert_query = $this->db2->insert_string('news', $item);
                $insert_query = str_replace('INSERT INTO', 'INSERT IGNORE INTO', $insert_query);
                $this->db2->query($insert_query);
                if ($this->db2->affected_rows() > 0) {
                    array_push($new_array, $item);
                }


            }
            if ($posted === '0') {

                // $this->db->order_by("pubdate","desc");
                // $ad_query = $this->db->get('advertisement');


                $this->db2->order_by("pubdate", "desc");
                $sorter = $this->db2->get("news");


                foreach ($sorter->result_array() as $sort) {
                    $item2 = array(
                        'image' => $sort['image'],
                        'description' => $sort['description'],
                        'title' => $sort['title'],
                        'link' => $sort['link'],
                        'pubdate' => $sort['pubdate']
                    );

                    array_push($new_array2, $item2);

                }
                return $new_array2;
            } else {
                return $new_array;
            }
*/
        }






           /*


*/
        }





    function get_string_between($string, $start, $end){
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }

    function tooltip($username)
    {
        $data = array('tooltip' => '1');
        $query = $this->db->get_where('users', array('username' => $username));
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $tooltip = $row['tooltip'];
                $this->db->where('username', $username);
                $this->db->update('users', $data);
                return $tooltip;
            }

        } else {
            return '0';
        }

    }

    function notifications($username)
    {
        global $notification,$c;

        $c = 0;
        $notification = array();
        $query = $this->db->get_where('notifications', array('username' => $username, 'seen' => '0'));
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        }
        else {

            return $c;
        }

    }


    function reminders($username)
    {
        global $reminder,$c;

        $c = 0;
        $reminder = array();
        $query = $this->db->get_where('reminders', array('username' => $username, 'passed' => '0'));
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        }
        else {

            return $c;
        }

    }

    function timestamp_fix($pubdate){
        $temp = $pubdate;
        $temp = substr($temp, 0, -15);
        $timestamp1 = strtotime($temp);
        $timestamp2 = date('Y-m-d', $timestamp1);
        $pubdate =  strstr($pubdate, '016');
        $pubdate =  strstr($pubdate, ' ');
        $pubdate = substr($pubdate, 1);
        $pubdate = mb_substr($pubdate, 0, 8);
        $timestamp = $timestamp2 .' ' . $pubdate;
        return $timestamp;
    }
    function rss_news_feed_loader(){
        $CI = &get_instance();
        $this->db2 = $CI->load->database('news', TRUE);

        $q = $this->db2->get('news');
        $c = 0;
        foreach ($q->result_array() as $row) {

                $pubdata_database_last[$c] = array(
                  'title' => $row['title'],
                    'link' => $row['link'],
                    'image' => $row['image'],
                    'pubdate' => $row['pubdate'],
                    'description' => $row['description'],
                );

                $c++;

        }
        return $pubdata_database_last;
    }

function make_comparer() {
    // Normalize criteria up front so that the comparer finds everything tidy
    $criteria = func_get_args();
    foreach ($criteria as $index => $criterion) {
        $criteria[$index] = is_array($criterion)
            ? array_pad($criterion, 3, null)
            : array($criterion, SORT_ASC, null);
    }

    return function($first, $second) use (&$criteria) {
        foreach ($criteria as $criterion) {
            // How will we compare this round?
            list($column, $sortOrder, $projection) = $criterion;
            $sortOrder = $sortOrder === SORT_DESC ? -1 : 1;

            // If a projection was defined project the values now
            if ($projection) {
                $lhs = call_user_func($projection, $first[$column]);
                $rhs = call_user_func($projection, $second[$column]);
            }
            else {
                $lhs = $first[$column];
                $rhs = $second[$column];
            }

            // Do the actual comparison; do not return if equal
            if ($lhs < $rhs) {
                return -1 * $sortOrder;
            }
            else if ($lhs > $rhs) {
                return 1 * $sortOrder;
            }
        }

        return 0; // tiebreakers exhausted, so $first == $second
    };
}
    function news_detail($news){

       if(file_exists(FCPATH."application/views/home/news/$news.php")){
return $news;
        }
        else{
            $CI = &get_instance();
            $news2 = $news;
            $news = str_replace("-"," ",$news);
            $news2 = str_replace(":","",$news);
            
            $news = substr($news, 8, 5);
            $this->db2 = $CI->load->database('news', TRUE);
            $this->db2->like('title',$news);
            $q = $this->db2->get('news');
            if($q->num_rows()==0){
                return 'error';
            }
            else{
                foreach($q->result_array() as $row){
                    $title = $row['title'];
                    $pubdate = $row['pubdate'];
                    $description = $row['description'];
                    $image = $row['image'];

                }
                $cookie_file_path = FCPATH."application/views/home/news_detail.php";
                $content = file_get_contents($cookie_file_path);
                $content = str_replace('{{=title=}}', $title, $content);
                $content = str_replace('{{=description=}}', $description, $content);
                $content = str_replace('{{=image=}}', $image, $content);
                $content = str_replace('{{=pubdate=}}', $pubdate, $content);
                $content = str_replace('{{=username=}}', $this->session->userdata('username'), $content);
                $content = str_replace('{{=firstname=}}', $this->session->userdata('firstname'), $content);
                $content = str_replace('{{=lastname=}}', $this->session->userdata('lastname'), $content);
                $content = str_replace('{{=nationality=}}', $this->session->userdata('nationality'), $content);
                $content = str_replace('{{=location=}}', $this->session->userdata('location'), $content);
                $content = str_replace('{{=phone=}}', $this->session->userdata('phone'), $content);
                $content = str_replace('{{=email=}}', $this->session->userdata('email'), $content);
                $content = str_replace('{{=name=}}', $this->session->userdata('firstname').$this->session->userdata('lastname'), $content);

                file_put_contents(FCPATH."application/views/home/news/".$news2.'.php', $content);

                return $news2;
            }

        }


    }

}
