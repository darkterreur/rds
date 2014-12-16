<?php
	include_once("../include/fonction.php"); 
	
	add_slashes($_POST);
	
	//print_r($_POST);
	
	
	$today = date("Y-m-d H:i:s");
	//echo 'today ->'.$today;
	
	$res = connexion::insert('	INSERT INTO `livre` (`prenom_user`, `message`,`date_mess`,`status`,`date_modif`) 
								VALUE ("'.$_POST['prenom_user'].'","'.$_POST['message_livr'].'", "'.$today.'",1,"'.$today.'")');
	
	
	echo $res;	
	
	
?>