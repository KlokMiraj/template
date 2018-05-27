<?php
require('model/databases.php');

class Controller{
	public function __construct(){
		$database = new Database();

	}	

	function load_view(){
		include('view/ui.php');
	}

	function login($user_name, $password){
	$database=$this->load_databases()->database;
	$password=$password;
	$user_name = $username;

	if($database->get_row($user_name,$password)){
		if(result){
			$this->load_view();
		}
	}
		}
	}

?>
