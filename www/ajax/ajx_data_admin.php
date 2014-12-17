<?php
	include_once("../include/fonction.php"); 
	
	add_slashes($_POST);
	//print_r($_POST);
	
	$html = '';
	
	switch($_POST['ctxt']){
		case 'log':
			$html = get_login();
			break;
		
		case 'menu_admin':
			$html = menu_admin();
			break;
			
			
			
			
		case 'gestion_com':
			$html = gestion_comm();
			break;
		case 'gestion_valid_com':
			$html = valid_comm();
			break;
		case 'gestion_client':
			//$html = get_login();
			break;
		case 'gestion_type_client':
			$html = gestion_type_client();
			break;
			
			
			
		case 'delete':
			$html = delete_elem($_POST['elem'],$_POST['id']);
			break;
			
		case 'valid':
			$html = valid_livre($_POST['elem'],$_POST['id']);	
			break;
			
						
		default:
			$html = get_login();
			break;
	}
		
	echo $html;
	
?>