<?php 
class site_model extends CI_Model{

   function getall(){
   
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