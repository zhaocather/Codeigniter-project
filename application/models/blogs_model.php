<?php

class Blogs_model extends CI_Model{

	public function __construct(){
		$this->load->database();
	}
	
	public function get_blogs($slug = FALSE){
		
		if($slug == FALSE){
			
			$result = $this->db->get('blog');
			return $result->result_array();
		
		}else{
			
			$result = $this->db->get_where('blog',array('slug' => $slug));
			return $result->row_array();
		
		}
		
		
	
	}
	
	public function set_blogs(){
		
	}

}