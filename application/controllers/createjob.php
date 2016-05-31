<?php

class createjob extends CI_Controller{
 
   function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
	}



     function index(){

          $this->load->model('location');
          $data['country']=$this->location->getall();
          $this->load->helper('form');
          $data['pages']='createjobs';
          $this->load->view('includes/structure',$data);

     }


  function job_insert(){
   $this->load->model('jobs_model');
   $this->load->helper('form');
   $this->load->library('form_validation');
   $this->form_validation->set_rules('title','Name','trimrequired');

         if($this->form_validation->run()==false && isset($_POST['title'])){
              
              if($query=$this->jobs_model->create_job()){

               redirect(jobs);
         

               }
       

          } 


          else{

	          redirect(createjob);

           }




 }


 function is_logged_in(){
	
	      $is_logged_in=$this->session->userdata('is_logged_in');
	      if (!isset($is_logged_in) || $is_logged_in!=true ) {
		    //echo "you are logged out";
		    //die();
          
	      }
    }





}


?>