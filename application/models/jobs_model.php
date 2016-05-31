<?php 
class jobs_model extends CI_Model{

    function getall(){
   
        $this->db->from('jobs');
        $this->db->order_by("id", "desc");
        $q = $this->db->get(); 
	         if($q->num_rows() > 0){

	            foreach($q->result() as $row){
	
	            $data[]=$row;
	
	          }
	 
	    return $data;

      }
      

    }


   function create_job(){

    $new_job=array(

    	'title' => $this->input->post('title')

    	);

    $insert= $this->db->insert('jobs',$new_job); 
    return $insert;
   }







}
?>