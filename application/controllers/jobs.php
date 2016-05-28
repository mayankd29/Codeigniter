<?php 
class jobs extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
	}

   function index(){

    $this->load->model('jobs_model');
	$data['records']=$this->jobs_model->getall();
	$data['pages']='jobs';
    $this->load->view('includes/structure',$data);

    }

function is_logged_in(){
	
	$is_logged_in=$this->session->userdata('is_logged_in');
	if (!isset($is_logged_in) || $is_logged_in!=true ) {
		echo "you are logged out";
		die();
	}
}




}

?>