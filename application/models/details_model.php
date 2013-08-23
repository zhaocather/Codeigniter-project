<?php

class Details_model extends CI_Model{
		
		public function __construct(){
			$this->load->database();
		}
		
		public function get_details()
		{
			
				$query = $this->db->get('userinfo');
				return $query->result_array();
			
		}
		
		public function set_details(){
						
			$data = array(
				'Name' => $this->input->post('userName'),
				'Surname' => $this->input->post('surname'),
				'City' => $this->input->post('city'),
				'Email' => $this->input->post('email'),
				'Dob' => $this->input->post('dob')
			);
			
			return $this->db->insert('userinfo', $data);
		}

}