<?php
	include_once("../include/fonction.php"); 
	
	add_slashes($_POST);
	//print_r($_POST);
	
	$html = '';
	
	switch($_POST['ctxt']){
		case 'accu':
			$html = get_accueil();
			break;
			
		case 'bien':
			$html = get_bien_etre();
			break;
			
		case 'esth':
			$html = get_esthetique();
			break;
			
		case 'coac':
			$html = get_coaching();
			break;
			
		case 'dev':
			$html = get_dev_perso();
			break;
			
		case 'contact':
			$html = get_form_contact();
			break;
			
		case 'succes_mail':
			//$html = get_succes_mail();
			break;
			
		case 'fail_mail':
			//$html = get_fail_mail();
			break;
			
		case 'ment_lega':
			$html = get_mention_legal();
			break;
		
		case 'liv_or':
			$html = get_livre_or();
			break;
			
		case 'partenaire':
			$html = get_partenaire();
			break;
			
		default:
			$html = get_accueil();
			break;
	}
		
	echo $html;
	
?>