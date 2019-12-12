<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Register extends CI_Controller {
		public function _construct() {
			parent::_construct();
			$this->load->library('form_validation');
			$this->load->library('encrypt');
		}
		
		function index() {
			$this->load->view('register');
		}
		
		function validation() {
			$this->form_validation->set_rules('user_name','Name','required|trim');
			$this->form_validation->set_rules('user_email','Email Address','required|trim|valid_email|is_unique[codeigniter_register.email]');
			$this->form_validation->set_rules('user_password','Password','required');
			if($this->form_validation->run()) {
				$encrypted_password = $this->encrypt->encode($this->input->post('user_password'));
				$data = array (
					'name' => $this->input->post('user_name'),
					'email' => $this->input->post('user_email'),
					'password' => $encrypted_password
				);
			$this->Register_model->insert($data);
			$this->load->view('registered');
			}
			else {
				$this->index();
			} 
			
		}
	}
?>