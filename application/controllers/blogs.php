<?php

class Blogs extends CI_Controller{

	public function __construct(){
		parent::__construct;
		$this->load->model('blogs_model');
	}
	
	public function index(){
	
		$data['blog'] = $this->blogs_model->get_blogs();
		$data['title'] = 'Blog Archive';
		
		$this->load->view('template/header', $data);
		$this->load->view('blog/index.php', $data);
		$this->load->view('template/footer', $data);
	
	}
	
	public function view($slug){
		
		$data['blog'] = $this->blog_model->get_blogs($slug);
		$data['title'] = 'Single Blog';
		
		$this->load->view('template/header', $data);
		$this->load->view('blog/view.php', $data);
		$this->load->view('template/footer', $data);
	
	}

}