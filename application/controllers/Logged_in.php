<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Logged_in extends CI_Controller {
		public function _construct() {
			parent::_construct();
		}
		
		function index() {
			if(!$this->session->userdata('id')) {
				redirect('/login');
			}
			else {
				$this->load->view('logged_in');
			}
		}
		
		
		function logout() {
			$data = $this->session->all_userdata();
			foreach($data as $row => $rows_value) {
				$this->session->unset_userdata($row);
			}
			redirect(login);
		}
	}
?>