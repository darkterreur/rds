<?php
//////////////////////////////////////////////////////////////////////////////////
//				Fonction structure site
//////////////////////////////////////////////////////////////////////////////////

	function get_head(){
		//on test si je dois faire la migration ou non pour le premiere fois 
		if (!file_exists('./_json/ip.json')) {
			migration();
		}
		//ensuite a chasue fois je vais appliquer la gestion d'ip
		add_visit();
		
		
		$html ='';
		
		$html .= '	<head>
						<title>Renaissance des Sens</title>
						<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
						<meta name="keywords" content="bien-être, bien etre, massage, modelage, maquillage, domicile, essonne, savigny sur orge, développement personnel, coaching, coaching de vie, caoching beauté, relooking, atelier fille, enterrement de vie de jeune fille" />
						<meta name="description" content="Bien-être, coaching beauté et développement personnel, à domicile. Vous chercher de l\'aide pour réaliser un projet? Vous désirez changer de tête ou trouver votre style? Vous voulez vous détendre le temps d\'un massage bien-être?" />
						
						'.include_js().'
						
						<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
						<link rel="stylesheet" type="text/css" href="design/dataTables/jquery.dataTables.css">
						<link rel="stylesheet" media="screen" type="text/css" title="Design" href="design/fondation.css" />
						<link rel="stylesheet" media="screen" type="text/css" title="Design" href="design/button_effet.css" />	
						<link rel="stylesheet" media="screen" type="text/css" title="Design" href="design/new_css.css" />
						<link rel="stylesheet" media="screen" type="text/css" title="Design" href="design/admin_css.css" />
						
					</head>';
		
		return $html;
	}
	
	function include_js(){
		$js = '';
		
		$js .= '<script src="./_js/jquery-1.10.2.js"></script>
				<script src="./_js/jquery-ui-1.10.4.custom.min.js"></script>	
				<script type="text/javascript" src="./_js/liveQuery.js"></script>
				<script type="text/javascript" src="./_js/noty-2.2.2/js/noty/packaged/jquery.noty.packaged.min.js"></script>
				<script type="text/javascript" src="./_js/dataTables/jquery.dataTables.js"></script>
				<script type="text/javascript" src="./_js/_js.js"></script>
				<script type="text/javascript" src="./_js/_js_admin.js"></script>
				
				';
				
		return $js;
	}
	
	function get_header(){
		$html ='';
		
		$html .='	<div id="header">
						<h1 class="logo1"></h1>
						<h1 class="baniere1"></h1>
						<h1 class="banLog"></h1>
						'.get_nav().'
					</div>';
		
		return $html;
	}

	function get_nav(){
		$html ='';
		
		$html .='<div class="nav_wrapper">
						<ul id="nav">
							<li>
								<a class="jq_nav" lib="accu">
									<strong>Accueil</strong>
								</a>
							</li>
							<li>
								<a class="jq_nav" lib="bien">
									<strong>Bien être</strong>
								</a>
							</li>
							<li>
								<a class="jq_nav" lib="coac">
									<strong>Coaching en image</strong>
								</a>
							</li>
							<li>
								<a class="jq_nav" lib="dev">
									<strong>Développement Personnel</strong>
								</a>
							</li>
						</ul>
					</div>';
					
		return $html;
	}

	function get_container(){
		$html ='';
	
		$html .= '	<div class="container">
						<div id="block_center" >
							
						</div>
						<div id="block_right">
							<div id="first_right">
								<div class="cont_img">
									<img src="./images/RDV_rose.jpg" width="100%" height="100%" />
								</div>
								'.get_contact().'
							</div>
							<div id="second_right">
								'.get_partenaire().'
							</div>
						</div>
						
					</div>';
   				
   		return $html;	
	}
	
	function get_contact(){
		$html = '';
		$html = '	
						<H3>Sur rendez-vous : </H3>
						<div style="margin-top: 40px;">
							<div style="height: 50px;">
								<div style="float: left;margin-top: 7px;">
									<b>Par téléphone : </b>
								</div>
								<div class="i_toolbar jq_telephone"  lib="contact" style="float: left;margin-left: 15px;">
									<i class="fa fa-phone S20 i_hover"></i>
								</div>
								<div id="telephone"> 06.13.44.75.93 </div>
							</div>
							<div style="height: 50px;">
								<div style="float: left;margin-top: 7px;">
									<b>Par mail : </b>
								</div>
								<div class="i_toolbar jq_contact"  lib="contact" style="float: left;margin-left: 20px;">
									<i class="fa fa-envelope-o S20 i_hover"></i>
								</div>
							</div><br>
							<div>
								<b>Mode de paiement</b> :
							</div>
							<div> espèces uniquement </div>
						</div>
				';
		$email = 'bonnie.renaissancedessens@gmail.com ';
		
				
				
		return $html;	
	}


	function get_footer(){
		$html ='';
		
		$html .= '	<div id="footer">
						<ul>
							<li class="footGene" style="width: 11%;">
								<a class="jq_nav" lib="ment_lega">Mentions légales</a>
							</li>
							<li class="footGene" style="width: 9%;">
								<a class="jq_nav" lib="liv_or" >Livre d\'or</a>
							</li>
							<li class="footGene" style="width: 47.19%;">
								<a style="cursor: default;" title=" nicolle.gael@gmail.com ">
									Copyright "Renaissance des Sens" 2014, tous droits r&eacute;serv&eacute;s. By Nicolle Gaêl
								</a>
							</li>
														   						
						</ul>
						<ul>
							<li style="width: 20%;">
								<div class="compteur" style="text-align: center;">'.stat_visit().'</div>
							</li>
							<li class="li_social">
								<a href="https://www.facebook.com/bonnie91" onclick="window.open(this.href); return false;">
									<div class="fa_social" >
										<i class="fa fa-facebook-square S20"></i>
									</div>
								</a>
							</li>
							<li class="li_social">
								<a href="https://twitter.com/renaissancesens" onclick="window.open(this.href); return false;">
									<div class="fa_social" >
										<i class="fa fa-twitter-square S20"></i>
									</div>
								</a>
							</li>
							<li class="li_social">
								<a href="" onclick="">
									<div class="fa_social" >
										<i class="fa fa-users S20"></i>
									</div>
								</a>
							</li>
						</ul>
					</div>';

		return $html;
	}


//***************************************//
//			Function admin
//***************************************//
















?>