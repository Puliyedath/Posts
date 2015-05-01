<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    
	public function index()
	{
		$this->load->view('welcome_message');
	}

    public function create()
    {
        $post = $this->input->post(null, true);
        $this->load->model('Post');
        $this->Post->add($post);
        $data['posts'] = $this->Post->all()->result_array();
        $this->load->view("partial.php", $data);
    }
}
