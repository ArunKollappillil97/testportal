<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Questions_model extends CI_Model {
		
		function get_questions() {
			$this->db->select('id,question,choice1,choice2,choice3,answer');
			$this->db->from('codeigniter_quiz');
			
			$query = $this->db->get();
			
			return $query->result();
		}
	}
?>