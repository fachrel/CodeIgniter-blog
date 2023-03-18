<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Posts extends CI_Controller
{
	public function index()
	{

		$data['posts'] = $this->post_model->get_posts();
		print_r($data['posts']);

		$this->load->view('templates/header', $data);
		$this->load->view('posts/index', $data);
		$this->load->view('templates/footer');
	}
}
