<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Questions extends CI_Controller {
		function _construct() {
			parent::_construct();
			$this->load->database();
		}
		
		
		function display_quiz() {
			$this->data['questions'] = $this->Questions_model->get_questions();
			$this->load->view('questions', $this->data);
		}
		
		function display_result() {
			$this->data['check'] = array(
				'q1' => $this->input->post('id1'),
				'q2' => $this->input->post('id2'),
				'q3' => $this->input->post('id3'),
				'q4' => $this->input->post('id4'),
				'q5' => $this->input->post('id5'),
				'q6' => $this->input->post('id6'),
				'q7' => $this->input->post('id7'),
				'q8' => $this->input->post('id8'),
				'q9' => $this->input->post('id9'),
				'q10' => $this->input->post('id10'),
				'q11' => $this->input->post('id11'),
				'q12' => $this->input->post('id12'),
				'q13' => $this->input->post('id13'),
				'q14' => $this->input->post('id14'),
				'q15' => $this->input->post('id15'),
				'q16' => $this->input->post('id16'),
				'q17' => $this->input->post('id17'),
				'q18' => $this->input->post('id18'),
				'q19' => $this->input->post('id19'),
				'q20' => $this->input->post('id20')
			);
			
			$this->load->model('Questions_model');
			$this->data['result'] = $this->Questions_model->get_questions();
			$this->load->view('result',$this->data);
		}
	}

?>