<?php
	// ************************************************* //
	// PHASE 0 : Déclaration des variables               //
	// ************************************************* //

	// Chemin des fichiers textes
	//$path_file_compteur = '/mnt/110/sdb/4/6/darkterreur/Bonniesbeauty/include/compteur.txt';
	//$path_file_ip = '/mnt/110/sdb/4/6/darkterreur/Bonniesbeauty/include/ip.txt';

	$path_file_compteur = './include/compteur.txt';
	$path_file_ip = './include/ip.txt';
	
	// On récupère l'ip du visiteurs
	$var_ip_visiteur = $_SERVER["REMOTE_ADDR"];
	
	// Date du jour
	$var_datecourante = date ('Y-m-d');
	
	// On déclare une variable définie à FAUX. Sert dans la boucle lorsque l'on cherche l'ip courant dans le fichier d'ip
	$flag_ifipexist = false;
	
	// ************************************************* //
	// PHASE 1 : On détecte si l'ip est nouvelle ou non  //
	// ************************************************* //
	
	// On ouvre le fichier d'ip
	$file_ip = fopen($path_file_ip, 'r+');
	
	// On déclare un tableau d'ip basé sur le fichier texte
	$tableau_ip = file($path_file_ip);

	// On boucle tant que l'ip n'est pas trouvé ET qu'on a pas fini de lire le fichier
	for($i=0; $i<count($tableau_ip) && $trouve == false; $i++) {
		// On lit chaque ligne du fichier
		$var_ligne = fgets($file_ip, 4096);
		
		// On éclate la ligne dans un tableau lorsque séparée par un "|" 
		$var_cellule = explode("|", $var_ligne);
		
		// On récupère la date
		$date_save = $var_cellule[0];
		
		// On récupère l'ip
		$ip_save = $var_cellule[1];
		
		// On regarde lorsque la date correspond à celle du jour
		if ($date_save == $var_datecourante) {	
			
			// On regarde si l'ip sur la ligne est le même que l'ip courante
			if(strcmp($ip_save,$var_ip_visiteur) == 0 ) {
				
				// On passe la variable $trouve à vrai
				$flag_ifipexist = true;
			}
		}
	}
	
	// On ferme le fichier
	fclose($file_ip);
	
	// ************************************************* //
	// PHASE 2 : IP Nouvelle : On l'ajoute aux fichiers  //
	// ************************************************* //
	
	// Si l'ip n'a pas été trouvé dans le fichier ip.txt
	if($flag_ifipexist == false) {  
		
		// On ouvre le fichier compteur.txt
		$file_compteur = fopen($path_file_compteur, 'r+');
		
		// On lit la première ligne (nbr de visite)
		$var_visit_total = fgets($file_compteur, 4096); 
		
		// On incrémente ce nombre de visite
		$var_visit_total++;
		
		// On positionne le curseur au début de la ligne
		fseek($file_compteur, 0); // On remet le curseur au début du fichier
		
		// On écrit le nouveau compteur (l'ancien est effacé car nous sommes en mode r+)
		fputs($file_compteur, $var_visit_total);
		
		// On ferme le fichier
		fclose($file_compteur);
		
		// On ouvre le fichier ip.txt
		$file_ip = fopen($path_file_ip, 'a+');
			
		// On ajoute l'ip et la date du jour sur une nouvelle ligne
		fputs($file_ip, "\n".$var_datecourante."|".$var_ip_visiteur);
		
		// On ferme le fichier
		fclose($file_ip);
	}

	// ************************************************* //
	// PHASE 3 : Lecture fichiers pour compter les IP    //
	// ************************************************* //
	
	// On ouvre le fichier (compteur total)
	$file_compteur = fopen($path_file_compteur, 'r+');
	
	// On récupère la donnée
	$var_visit_total = fgets($file_compteur, 4096);
	
	// On ferme le fichier
	fclose($file_compteur);

	// On ouvre le fichier d'ip
	$file_ip = fopen($path_file_ip, 'r+');
	
	// On déclare un tableau d'ip basé sur le fichier texte
	$tableau_ip = file($path_file_ip);

	// On initialise notre variable de compteur jour
	$var_visit_jour = 0;
	
	// On boucle pour chaque ligne du fichier
	for($i=0; $i< count($tableau_ip); $i++) {
		
		// On lit chaque ligne du fichier
		$var_ligne = fgets($file_ip, 4096);
		
		// On éclate la ligne dans un tableau lorsque séparée par un "|" 
		$var_cellule = explode("|", $var_ligne);
		
		// On récupère la date
		$date_save = $var_cellule[0];
		
		// On récupère l'ip
		$ip_save = $var_cellule[1];
		
		// Si la date est celle du jour, on compte le visiteur pour la journée
		if ($date_save == $var_datecourante) $var_visit_jour++;
	}
	
	// On ferme le fichier
	fclose($file_ip);

	// ************************************************* //
	// PHASE 4 : On affiche les résultats                //
	// ************************************************* //
	
	// Compteur global
	echo "Total visiteurs : ".$var_visit_total." <br/> ";
	
	// Compteur journalier
	echo $var_visit_jour." visiteurs aujourd'hui";
?>