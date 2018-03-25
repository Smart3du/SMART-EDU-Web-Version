<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Model{
	var $username;
	var $password;
	var $status;

	public function select_user($username){
		$this->db->from('user');
		$this->db->where('username', $username);

		 $query = $this->db->get();
		if ( $query->num_rows() > 0 )
    	{	
    		$data = $query->result_array();
    	    foreach ($data as $key => $value) {
    	    	# code...
    	    	$GLOBALS['$username']=$value['username'];
    	    	$GLOBALS['$password']=$value['password'];
    	    	$GLOBALS['$status']=$value['status'];
    	    }
    	    $user = array(
    	    	 'username' => $GLOBALS['$username'],
    	    	 'password' => $GLOBALS['$password'],
    	    	 'status' => $GLOBALS['$status']
    	    );
        	return $user;
    	}
    	else{
    		return null;
    	}
	}
}