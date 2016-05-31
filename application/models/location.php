<?php
class location extends CI_Model{

   function getall(){
   
        $this->db->from('location');
        $this->db->where("location_type", "0");
        $this->db->order_by("name", "asc");
        $q = $this->db->get(); 

	         if($q->num_rows() > 0){

	            foreach($q->result() as $row){
	
	            $data[]=$row;
	
	            }
	 
	    return $data;

	          }

      }

}


?>