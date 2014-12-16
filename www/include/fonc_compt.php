<?php

	function migration(){
		$path_file_compteur = './include/compteur.txt';
		$path_file_ip = './include/ip.txt';
		$a_global = array();
		$a_nb = array();

		// On ouvre le fichier d'ip
		$file_ip = fopen($path_file_ip, 'r+');
		// On déclare un tableau d'ip basé sur le fichier texte
		$tableau_ip = file($path_file_ip);
	
		// On boucle tant que l'ip n'est pas trouvé ET qu'on a pas fini de lire le fichier
		for($i=0; $i<count($tableau_ip) && $trouve == false; $i++) {
		//for($i=0; $i<4 && $trouve == false; $i++) {
			// On lit chaque ligne du fichier
			$var_ligne = fgets($file_ip, 4096);
			// On éclate la ligne dans un tableau lorsque séparée par un "|" 
			$var_cellule = explode("|", $var_ligne);
			// On récupère la date
			$date_save = $var_cellule[0];
			// On récupère l'ip
			$ip_save = $var_cellule[1];
			//on met le tout dans un array 2 dimension				
			$ip_save = trim($ip_save);
					
			$a_global[$i]['ip'] = $ip_save;
			$a_global[$i]['date'] = $date_save;
		}
		// On ferme le fichier
		fclose($file_ip);
		//on enregistre l'array dans un json
		file_put_contents('./_json/ip.json', json_encode($a_global));

		// On ouvre le fichier compteur.txt
		$file_compteur = fopen($path_file_compteur, 'r+');
		// On lit la première ligne (nbr de visite)
		$var_visit_total = fgets($file_compteur, 4096); 
		//on met le compteur dans une tableau 
		$a_nb[] = $var_visit_total;
	
		// On ferme le fichier
		fclose($file_compteur);
		//on enregistre dans un json
		file_put_contents('./_json/compteur.json', json_encode($a_nb));
	
		return true;
	}

	function test_exist($ip_vis,$date_vis){
		
		$json_ip = file_get_contents ('./_json/ip.json');
		$a_ip = json_decode($json_ip);
		
		foreach($a_ip as $value){
			if( ($value->ip == $ip_vis) && ($value->date == $date_vis) ){
				return true;
			}
		}

		return false;
	}

	function add_visit(){
		//print_r($_GET);
		
		/* Different from
			gl => google ou autre moteur de recherche
			qr => promo code qr
			fb => lien facebook
			tw => lien twitter
		*/
		
		if( isset($_GET['from']) ){
			$from = $_GET['from']; 
		}else{
			$from = 'gl';
		}
		
		// On récupère l'ip du visiteurs
		$var_ip_visiteur = $_SERVER["REMOTE_ADDR"];
		// Date du jour
		$var_datecourante = date ('Y-m-d');
		
/*	
		$var_ip_visiteur = '86.175.247.146';
		$var_datecourante = '2009-08-15';
*/
		
		$exist = test_exist($var_ip_visiteur,$var_datecourante);
   					
		if($exist == true){
			return false;
		}elseif($exist ==  false){
			$json_ip = file_get_contents ('./_json/ip.json');
			$a_ip = json_decode($json_ip);
			
			$size = count($a_ip);
			
			$a_ip[$size]['ip'] 		= $var_ip_visiteur;
			$a_ip[$size]['date'] 	= $var_datecourante;
			$a_ip[$size]['from'] 	= $from;
			$a_ip[$size]['support'] = detect_support_visit();
			
			file_put_contents('./_json/ip.json', json_encode($a_ip));

			$json_cpt = file_get_contents ('./_json/compteur.json');
			$a_cpt = json_decode($json_cpt);
		
			$a_cpt[0]++;			
						
			file_put_contents('./_json/compteur.json', json_encode($a_cpt));
			
			return true;	
		}
	}
	
	//faire une fonctione qui compte le nombre de visite aujourd'hui
	//faire une fonction qui recupere retourne le nombre de visite total sur le nombre de visite d'aujourd'hui
	function nb_visite_jour(){
		// Date du jour
		$dateCourante = date ('Y-m-d');
		$nb =0;
		
		$json_ip = file_get_contents ('./_json/ip.json');
		$a_ip = json_decode($json_ip);
		
		foreach($a_ip as $value){
			if( $value->date == $dateCourante ){
				$nb++;
			}
		}
		
		return $nb;
	}
	
	function stat_visit(){
		$html = '';
		
		$json_cpt = file_get_contents ('./_json/compteur.json');
		$a_cpt = json_decode($json_cpt);
		
		$nb_total = $a_cpt[0];
		$nb_jour = nb_visite_jour();
		
		$html .= $nb_total." visites totales, dont ".$nb_jour." aujourd'hui.";
		
		return $html;
	}
	
	
	function detect_support_visit(){
		$support = '';
		
		$detect = new Mobile_Detect();
		if ($detect->isMobile()){
			$support = 'mobile';
		}elseif ($detect->isTablet()){
			$support = 'tablet';
		}else{
			//on est donc sur un ordinateur		
			$arrayUserAgents = array(	"Windows 3.1" => array("Windows 3.1", "Win3.1", "Win16"),
								    	"Windows 95" => array ("Windows 95", "Windows_95", "Win95"),
									    "Windows 98" => array ("Windows 98", "Windows_98", "Win98"),
									    "Windows NT 4.0" => array ("Windows NT 4.0", "WinNT4.0"),
									    "Windows Millenium" => array ("Windows Millenium", "Windows M", "Windows_ME", "WinME"),
									    "Windows 2000" => array ("Windows 2000", "Windows_2000", "Win2000", "Windows NT 5.0"),
									    "Windows XP" => array ( "Windows XP", "Windows_XP", "WinXP"),
									    "Windows Server 2003" => array ("Windows Server 2003", "Windows NT 5.2"),
									    "Windows Vista" => array ("Windows Vista", "Windows NT 6.0"),
									    "Windows NT" => array ("Windows NT", "WinNT"),
									    "Mac OS"=> array ("Mac OS", "Mac_PowerPC", "Macintosh", "PPC Mac OS", "Intel Mac OS"),
									    "Sun OS"=> array ("Sun OS", "SunOS"),
									    "QNX" => array ("QNX"),
									    "Irix"=> array ("Irix", "IRIX"),
									    "Open BSD" => array ("Open BSD", "OpenBSD"),
									        "Free BSD" => array ("Free BSD", "FreeBSD"),
									        "Net BSD" => array ("Net BSD", "NetBSD"),
									        "Linux" => array ("Linux", "X11", "Debian"),
									    "BeOS"  => array ("BeOS"),
									    "Windows 7" => array ("Windows NT 7.0")
									    );
								 
		    foreach ($arrayUserAgents as $key => $value) {
		        foreach ($value as $userAgents) {
		             if (strpos($_SERVER['HTTP_USER_AGENT'],$userAgents)) {
		                    $support = $key;
		                    break;
		             }
		        }
		    }
	    }
	    
	    
	    if($support == ''){
		    $support = strpos($_SERVER['HTTP_USER_AGENT']);
	    }
	    
	    return $support;
	    
	}

?>