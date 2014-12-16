<?php
	include_once("../include/fonction.php"); 
	
	add_slashes($_POST);
	
	//print_r($_POST);
	
	
	$log = "bonnie";
	$pass ="pomme";
	
	if( $_POST['login_admin'] == $log && $_POST['pwd_admin'] == $pass ){
		echo 1;
	}else{
		echo 0;
	}



	
	
?>