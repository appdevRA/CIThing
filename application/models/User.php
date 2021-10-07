<?php
	class User extends CI_Model{
		public function __construct(){
			parent::__construct();
		}
		
		function echoTest(){
			echo "Im here!";
		}
		
		function displayUsers(){
			$query = $this->db->query("select * from proxies");
			return $query->result();
		}
		
		function addNewUser($username, $password){
			var_dump($_REQUEST);
			$query = $this->db->query("insert into user VALUES(NULL,'".$username."','".md5($password)."',1)");
		}
		
		
		
		
	}
?>