<?php
	
	//on va recevoir des un array de variable $_POST
	//$elem va permettre de déterminer la table sur laquelle on veut faire la requete
	// $id va permettre de dire si on est en creation $id=0 ou si on est en modification $id<>0
	
	//en dehors de ces deux element on peut boucler sur le array $_POST pour creer notre requete cle => champs et value => valeur a enregistrer
	//pour cela il faut que les name des champs de formulaire porte le meme nom que les champs de base de donnee.
	
	
	//ici on détermine la table que l'on va cibler
	$table = '';
	$where = '';
	switch( $_POST['elem'] ){
		case '':
			$table = '';
			$where = '';
			break;
			
			
	}
	
	
	if($_POST['id'] == 0){
	//on est en creation donc insert
		$a_cle = array();
		$a_valeur = array();
		
		foreach($_POST as $key=>$value){
			if($key != 'elem' || $key != 'id'){
				$a_cle[] = $key;
				$a_valeur[] = $value;
			}
		}
		$champ = implode(',', $a_cle);
		$val = implode(',', $a_valeur);
		
		$req = 'INSERT INTO '.$table.' 
					('.$champ.')
				VALUES 
					('.$val.')';
		
	}else{
	//on est en modification donc update
		
		$a_set = array();
		
		
		foreach($_POST as $key=>$value){
			if($key != 'elem' || $key != 'id'){
				$a_cle[] = '`'.$key.' = "'.$value.'"'  ;
				
			}
		}
	
		$set = implode(',', $a_set);
	
		$req = 'UPDATE '.$table.'
				SET '.$set.'
				'.$where.' ';
	}
		
	
	//execution sql
	
	$retour = array('sql' => $req
					,'message' => ''
				);
	
	return json_encode($retour);
	
?>