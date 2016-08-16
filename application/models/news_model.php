<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function get($key = null) {
        if ($key === null) {
            $news_array = array();
            $count = 0;
            $this->db->select('image, title, link');
            $q = $this->db->get('home_news');

            foreach ($q->result_array() as $row) {
                $news_array[$count] = array(
                    'image' => $row['image'],
                    'title' => $row['title'],
                    'link' => $row['link'],
                );
                $count += 1;
            }
            return $news_array;
        }
        else{
            $this->db->select('email, password');
            $q = $this->db->get('users');
            return $q;
        }
    }

    public function update($key = null) {
        /*if ($key === null) {
            $rss = new DOMDocument();
            $rss->load('http://www.wired.com/feed/');
            $counter = 1;
            foreach ($rss->getElementsByTagName('item') as $node) {
                   $img2 = $node->getElementsByTagName('description')->item(0)->nodeValue;
                   
$img3 = strstr($img2, 'src');
$img4 = substr($img3, 5);
$img = substr($img4, 0, strpos($img4, '"'));

                $item = array(
                    'image' => $img,
                    'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
                    'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
                );
                $this->db->where('id', $counter);
    $this->db->update('home_news' ,$item);
                $counter += 1;
            }
        }*/
    }

}
?>