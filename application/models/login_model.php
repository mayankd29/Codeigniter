<?php

class Login_model extends CI_Model{
	function validate(){
		
        echo $this->input->post('username');
        echo md5($this->input->post('password'));
        $this->db->where('username', $this->input->post('username'));
	    $this->db->where('password', MD5($this->input->post('password')));
		$query = $this->db->get('registration');
		//echo "modelll". $query;
		echo "no.of rows".$query->num_rows();
		if($query->num_rows() == 1){
			return true;
		}

	}
function create_member(){

$new_member_insert_data = array(
	'first_name' => $this->input->post('first_name'),
	'last_name' => $this->input->post('last_name'),
	'username' => $this->input->post('username'),
	'email' => $this->input->post('email'),
	'password' => md5($this->input->post('password')),

);

$insert = $this->db->insert('registration', $new_member_insert_data);
return $insert;



}

}
?>