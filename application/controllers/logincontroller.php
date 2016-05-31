<?php

class Logincontroller extends CI_Controller{

function index(){
	$this->load->helper('form');

	$data['main_content'] = 'login_form';
	$this->load->view('login', $data);


}
function validate_credentials(){
	$this->load->model('login_model');
	$query = $this->login_model->validate();

	echo "hello". $query;


	if($query){

		$data = array(
			'username' => $this->input->post('username'),
			'is_logged_in' => true

			);
		$this->session->set_userdata($data);
		redirect('jobs');

	}
	else{
		echo "hie";
		$this->index();
	}
}

function signup(){
	$this->load->helper('form');
	$this->load->view('signup');


}
function create_member(){

	$this->load->library('form_validation');
	$this->form_validation->set_rules('first_name', 'first_name', 'trim|required');
	$this->form_validation->set_rules('last_name', 'last_name', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
	$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[4]');
	if($this->form_validation->run() == false){

		$this->load->view('signup');
	}
	else{
		$this->load->model('login_model');
		if($query = $this->login_model->create_member()){
			$this->load->view('login');
			
        }
        else{

        	$this->load->view('signup');
         }

	}

}
}

?>
