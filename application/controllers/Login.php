<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Login extends CI_Controller {
		public function _construct() {
			parent::_construct();
			$this->load->library('form_validation');
			$this->load->library('encrypt');
		}
		
		function index() {
			$this->load->view('login');
		}
		
		function validation() {
			$this->form_validation->set_rules('user_email','Email Address','required|trim|valid_email');
			$this->form_validation->set_rules('user_password','Password','required');
			if($this->form_validation->run()) {
				$result = $this->Login_model->can_login($this->input->post('user_email'),$this->input->post('user_password'));
				if($result == '') {
					redirect('/logged_in');
				}
				else {
					$this->session->set_flashdata('message',$result);
					redirect('/login');
				}
			}
			else {
				$this->index();
			} 
			
		}
	}
?>