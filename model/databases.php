<?php
class Databases{
	$this->__construct();
	$con=new mysqli("localhost","root","","save_the_leopard");

	public function __construct(){

	}

	public function get_row($user_name, $password){
		
		$result=$mysqli->query("Select 'username && password' from test where user=$user_name AND password=$password");
			if($result==true){
				echo "Sucesfully logged in";
			}
		return $result;
			}
}
?>