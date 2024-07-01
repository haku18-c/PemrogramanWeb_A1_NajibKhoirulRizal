<?php

	class Admin_model extends CI_Model{
		public function __construct(){
			parent::__construct();	
		}

		public function getAdmin($username){
			$adm = $this->db->get_where('admins', array('username' => $username));
			return $adm->row_array();
		}

		public function tambah_admin($username, $password) {
	        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
	        
	        $data = array(
	            'username' => $username,
	            'password' => $hashed_password
	        );
	        

	        $this->db->insert('admins', $data);
	        return $this->db->affected_rows() > 0;
    	}	
		
		public function update_password($username, $new_password) {

	        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
	        $data = array(
	            'password' => $hashed_password
	        );
	        
	        $this->db->where('username', $username);
	        $this->db->update('admins', $data);
	        return $this->db->affected_rows() > 0;
	    }
	}
?>
