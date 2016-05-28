<?php 
class jobs_model extends CI_Model{

   function getall(){
    $this->db->select('title,job_details');
    $q=$this->db->get('jobs');

	if($q->num_rows() > 0){
	 foreach($q->result() as $row){
	
	   $data[]=$row;
	
	 }
	 return $data;
    }
      

   }

}
?>