<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feed extends CI_Controller {



 public function __construct() {
        parent::__construct();

        $this->load->helper('xml');
        $this->load->helper('text');
$this->load->model('Posts_model', 'posts');
    }

	public function index()
	{
	
	$data['feed_name'] = 'MyWebsite.com'; // your website
    $data['encoding'] = 'utf-8'; // the encoding
    $data['feed_url'] = 'http://www.MyWebsite.com/feed'; // the url to your feed
    $data['page_description'] = 'What my site is about comes here'; // some description
    $data['page_language'] = 'en-en'; // the language
    $data['creator_email'] = 'mail@me.com'; // your email
    $data['posts'] = $this->posts->getPosts(10);  
    header("Content-Type: application/rss+xml"); // important!

 $this->load->view('rss', $data);
	
			}
}
