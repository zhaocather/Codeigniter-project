<?php

class Details extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('details_model');
	}
	
	
	public function index()
	{
		$this->load->helper('url');
		
		$data['details'] = $this->details_model->get_details();
		$data['title'] = 'View Details';
		$this->load->view('details/templates/header.php', $data);
		$this->load->view('details/index.php', $data);
		$this->load->view('details/templates/footer.php', $data);
	}
	
	public function data(){
		$data['details'] = $this->details_model->get_details();
		

		$this->load->view('details/templates/data.php', $data);
	}
	
		
	public function create(){
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Create a Details item';
		
		$this->form_validation->set_rules('userName', 'Name', 'required');
		$this->form_validation->set_rules('surname', 'Last Name', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('dob', 'Date of Birth', 'required');
		
		
		
		if ($this->form_validation->run() === FALSE)
		{
		$this->load->view('details/templates/header.php', $data);
		$this->load->view('details/create.php', $data);
		$this->load->view('details/templates/footer.php', $data);
			
		}
		else
		{
			$this->details_model->set_details();
			$this->load->view('details/success.php');
			
		}
	
	}
}
