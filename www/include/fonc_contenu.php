<?php
//////////////////////////////////////////////////////////////////////////////////
//				Fonction contenu des pages 
//////////////////////////////////////////////////////////////////////////////////

	function get_accueil(){
		$html = '';
		
		$html .= '	<div id="texte">
						<p><i>L’apaisement réside en chacun de nous… Dalaï Lama.</i></p>
						<HR>
						<br>
						<div class="image">
							<img src="./images/accueil.jpg" width="100%" height="100%" />
						</div>
						<div>
							<p>
								Passionnée par le monde du bien-être depuis des années, je vous propose des 
								prestations qui vous permettront d’améliorer votre quotidien, du massage 
								bien-être au coaching en développement personnel en passant par l’esthétique.
							</p>
						</div><br>
						<div>
							<p>
								En effet, de nos jours, le stress est partout et nous nous éloignons de nous-mêmes et de 
								notre corps pour nous concentrer sur nos emplois, ainsi que sur les aléas du quotidien.
								Touchée par cette constatation, et inspirée par la culture asiatique proche du corps, je 
								vous propose de vous aider à renouer avec vous-même.
							</p>
						</div><br>
						<div>
							<p>
								Ainsi je me déplace à votre domicile, avec tout le matériel nécessaire à la réalisation de
								la prestation sélectionnée.
							</p>
						</div><br>
						<div>
							<p>
								Formée aux métiers de l’esthétique et du bien-être pendant 4 ans, et ayant travaillé pour
								différents SPA et centres de beauté, je m’engage à proposer à mes clients des soins de 
								qualité, dans le respect des conditions d’hygiène et de déontologie.
							</p>
						</div><br>
						<div>
							<p>
								Toujours soucieuse d’apporter plus à mes clients, et curieuse d’apprendre, je suis
								régulièrement des formations afin de continuer à améliorer mes prestations.
							</p>
						</div><br>
						<div>
							<p>
								Bonnie, praticienne bien-être.
							</p>
						</div>
					</div>';
		return $html;
	}

	function get_bien_etre(){
		$html = '';
		
		$html .= '	<div id="texte">
						<p><i>Nos mains existent pour que notre âme ne reste pas silencieuse… Proverbe Tibétain</i></p> 
						<HR>
						<br>
						<div class="image">
							<img src="./images/bien_etre.jpg" width="100%" height="100%" />
						</div>
						<div>
							<p>
								En Orient, le massage est utilisé traditionnellement en prévention des troubles de santé, et tous s’y adonnent 										régulièrement.					
							</p>
						</div>
						<div>
							<p>
								En effet l’art du toucher y est très important, et le lien entre le corps et l’esprit est
								omniprésent.
							</p>
						</div>
						<div>
							<p>
								En Occident, cette tradition n’est pas présente et les tensions s’accumulent.
								Casser la routine et offrez-vous un instant de détente.
							</p>
						</div><br><br><br>
						
						
						<div class="titre">
							tarifs :
						</div><br>
						<div>
							<p>
								Modelage relaxant aux huiles chaudes – 1h – 55€<br>
								Modelage des pieds avec réflexologie – 1h – 55€<br>
								Forfait 10 séances de 1h – 500€<br>
							</p>
						</div>
						<div>
							<p>
								Modelage amincissant 30’ – 40€<br>
								Forfait 10 séances de 30’ – 350€<br>
							</p>
						</div>
						<div>
							<p>
								Soin détox : Un gommage corps + modelage amincissant + enveloppement
							</p>
						</div>
						<div>
							<p>
								*Option gommage corps au savon noir – 25€
							</p>
						</div>				
					</div>';
		return $html;
	}

//plus utiliser pour le moment
	function get_esthetique(){
		$html = '';
		
		$html .= '	<div id="texte">
						<p><i>Parce que pour se sentir bien dans sa tête, il faut se sentir bien dans sa peau…</i></p> 
						<HR>
						<br>
						<div class="image">
							<img src="./images/portrait3.jpg" width="100%" height="100%" />
						</div>
						<div>
								<label class="titre_soulign">Épilation Visage :<label><br><br>
								Sourcils - 8€<br>						
								Lèvres - 8€	<br>					
								Menton - 8€	<br>			
						</div><br><br>
						<div>
								<label class="titre_soulign">Épilation femme :</label><br><br>
								Aisselles - 15€<br>
								¾ jambes - 20€<br>
								Jambes complètes - 25€<br>
								Maillot classique - 15€<br>
								Maillot Brésilien - 20€<br>
								Maillot Américain - 25€<br>
								Maillot intégrale - 25€<br>
								Bras - 19€<br>
						</div><br><br>
						<div>
								<label class="titre_soulign">Les forfaits femme :</label><br><br>
								3/4Jambes - Maillot –Aisselles – 40€<br>
								3/4jambes - Maillot brésilien – Aisselles – 45€<br>
								3/4Jambes - Maillot A/I – Aisselles – 50€<br>
								Jambescomplètes - maillot – aisselles – 45€<br>
								Jambescomplètes - maillot Brésilien – aisselles – 50€<br>
								Jambescomplètes - maillot A/I – aisselles – 55€<br>
						</div><br><br>
						<div>
								<label class="titre_soulign">Les forfaits femme :</label><br><br>
								3/4Jambes - Maillot –Aisselles – 40€<br>
								3/4jambes - Maillot brésilien – Aisselles – 45€<br>
								3/4Jambes - Maillot A/I – Aisselles – 50€<br>
								Jambescomplètes - maillot – aisselles – 45€<br>
								Jambescomplètes - maillot Brésilien – aisselles – 50€<br>
								Jambescomplètes - maillot A/I – aisselles – 55€<br>
						</div><br><br>
						<div>
								<label class="titre_soulign">Épilation homme :</label><br><br>
								Aisselles – 17€<br>
								Torse – 20€<br>
								Dos – 20€<br>
								Épaules – 15€<br>
								Jambes complètes – 30€<br>
								Maillot Classique – 20€<br>
						</div><br><br>
						<div>
								<label class="titre_soulign">Forfait épilation homme :</label><br><br>
								Torses-dos-épaules – 45€<br>
								Jambes complètes – maillot – 40€<br>
						</div><br><br>
						<div>
								<label class="titre_soulign">Les mains :</label><br><br>
								Beauté des mains – 24€<br>
								Soin complet des mains (avec gommage) – 35€<br>
								Pose de vernis -10€	<br>
						</div>
					</div>';
		return $html;
	}

	function get_coaching(){
		$html = '';
		
		$html .= '	<div id="texte">
						<p><i>Parce que pour se sentir bien dans sa tête, il faut se sentir bien dans sa peau…</i></p>
						<HR>
						<br>
						<div class="image">
							<img src="./images/beaute.jpg" width="100%" height="100%" />
						</div>
						<div>
							<p>
								Nous évoluons à une époque où l’image et le paraitre ont une place très importante.
								Les couleurs, la coiffure, le maquillage, le style vestimentaire construisent l’image que
								l’on envoie et qui nous définit socialement.					
							</p>
						</div>
						<div>
							<p>
								Mon travail ici est de vous aider à faire le lien entre l’être et le paraître. Trouver votre
								propre identité. Un look adapté à votre vie tout en respectant votre personnalité 
								profonde.					
							</p>
						</div><br><br><br>
						<div class="titre">
							tarifs :
						</div><br>
						<div>
							<p>
								Femme :<br>
								Relooking visage : 198€<br>
								Relooking vestimentaire : 198€<br>
								Relooking complet : 297€<br>
								Cours d’auto-maquillage : 70€/h<br>
								Option coiffure : 130€/2h<br>					
							</p>
						</div>
						<div>
							<p>
								Les ateliers filles (de 3 à 5 personnes ou de 6 à 8 personnes):<br>
								Une réunion entre filles un samedi après-midi autour des différents thèmes de l’image de soi.<br>
								Du fun, des rires, et pleins d’astuces pour construire son image, son style..<br>					
							</p>
						</div>
						<div>
							<p>
								Atelier relooking : 4h – 105€/personne ou 95€/personne<br>
								Atelier visage : 3h – 80€/ personne ou 70€/personne<br>
								Atelier maquillage : 2h – 65€/ personne ou 55€/personne<br>				
							</p>
						</div>
						<div>
							<p>
								Coaching en développement personnel : 80€/ séance *tarif dégressif selon forfait				
							</p>
						</div>				
					</div>';
		return $html;
	}

	function get_dev_perso(){
		$html = '';
		
		$html .= '	<div id="texte">
						<p><i>Le bonheur ne vient pas automatiquement. Il dépend de vos propres actions. Dalaï Lama.</i></p> 
						<HR>
						<br>
						<div class="image">
							<img src="./images/dev_perso.jpg" width="100%" height="100%" />
						</div>
						<div class="titre">
							Le coaching de vie : un chemin vers soi !
						</div><br>
						<div>
							<p>
								Vous avez un projet, et vous cherchez quelqu’un pour vous aider à le réaliser,					
							</p>
						</div>
						<div>
							<p>
								Vous souhaitez développer votre potentiel,					
							</p>
						</div>
						<div>
							<p>
								Gérer une situation personnelle ou professionnelle difficile,					
							</p>
						</div>
						<div>
							<p>
								Vous souhaitez mieux vous connaître,					
							</p>
						</div>
						<div>
							<p>
								Vous désirez acquérir autonomie, et bien-être,					
							</p>
						</div>
						<div>
							<p>
								Vous avez des objectifs, ou vous souhaitez réussir à vous en fixer.					
							</p>
						</div>
						<br><br><br>
						<div class="titre">
							Le coaching est fait pour vous !
						</div><br>
						<div>
							<p>
								En effet, après un entretien préliminaire où nous fixons vos envies et objectifs, 
								nous établissons un plan de coaching.
								Ce dernier se composera du nombre de séances envisagées et des grandes lignes de votre coaching.					
							</p>
						</div>
						<div>
							<p>
								Ainsi la tarification et le nombre de séances sont fixés au cas par cas.					
							</p>
						</div>				
					</div>';
		return $html;

	}

	function get_form_contact(){
		$html = '';

		$html .= '	<div style="margin: 10px;">
						 <form method="post" name="form_mail" id="form_mail" >
							<div style="">
								<div class="label">
									<label>Nom : </label>
								</div>
								<div class="input">
									<input type="text" name="nom_cont" id="nom_cont">
									<input type="text" name="error_nom_cont" id="error_nom_cont" value="error" class="error_input" disabled="disabled">
								</div>
							</div>
							<div style="">
								<div class="label">
									<label>Téléphone : </label>
								</div>
								<div class="input">
									<input type="text" name="tel_cont" id="tel_cont">
									<input type="text" name="error_tel_cont" id="error_tel_cont" value="error" class="error_input" disabled="disabled">
								</div>
							</div>
							<div style="">
								<div class="label">
									<label>Email : </label>
								</div>
								<div class="input">
									<input type="text" name="email_cont" id="email_cont">
									<input type="text" name="error_email_cont" id="error_email_cont" value="error" class="error_input" disabled="disabled">
								</div>
							</div>
							<div style="">	
								<div class="label">
									<label>Message : </label>
								</div>
								<div style="float: left;">
									<textarea type="text" name="message_cont" id="message_cont"  style ="width:360px;height:170px;float:left;"></textarea>
									<input type="text" name="error_message_cont" id="error_message_cont" value="error" class="error_textarea" disabled="disabled">
								</div>
							</div>
							<div style="float: left;margin-left: 38%;margin-top: 1%;">
								<div class="button" id="annuler" onclick="videForm(\'form_mail\');return false;">Reset</div>
								<div class="button" style="margin-left: 6px;" id="valider" onclick="envoiEmail();return false;">Envoi Email</div>	
							</div>
						</form>
						<input type="hidden" name="valid_form" id="valid_form" value="1">
					</div>
				';
		
		
		return $html;
		
	}
	
	function get_livre_or(){
		$html = '';

		$sql = 'SELECT * FROM `livre` WHERE `status`= 1 ORDER BY `date_mess` DESC ';
		
		$a_res = connexion::select($sql);
		
		//$html .= '<pre>'.print_r($a_res).'</pre>';
		
		if(!empty($a_res)){
		
			foreach($a_res as $key => $value){
				$html .= '	<div class="bloc_elem_comm">
								<div>
									'.mb_strtoupper($value['prenom_user']).' à écrit le '.$value['date_mess'].' :
								</div>
								<div class="mess_livr">
									'.$value['message'].'
								</div>
							</div>
						';
			}
		}
		
				
		
		
		$html .= '<div class="bloc_form_livr">
					<form method="post" name="form_livre_or" id="form_livre_or">
						<div style="">
							<div class="label">
								<label>Prénom : </label>
							</div>
							<div class="input">
								<input type="text" name="prenom_user" id="prenom_user">
								<input type="text" name="error_prenom_user" id="error_prenom_user" value="error" class="error_input" disabled="disabled">
							</div>
						</div>
						<div style="">	
							<div class="label" style="margin-top: -1.5%;">
								<label>Message : </label>
							</div>
							<div style="float: right;margin-right: 11%;margin-top: -1.5%;width: 60%;">
								<textarea type="text" name="message_livr" id="message_livr"  style ="width:60%;height:80px;float:left;"></textarea>
								<input type="text" name="error_message_livr" id="error_message_livr" value="error" class="error_textarea" disabled="disabled">
							</div>
						</div>
						<div style="float: left;margin-left: 38%;margin-top: 1%;">
							<div class="button" id="annuler" onclick="videForm(\'form_livre_or\');return false;">Reset</div>
							<div class="button" style="margin-left: 6px;" id="valider" onclick="saveComm();return false;">Send</div>				 
						</div>
					</form>
					<input type="hidden" name="valid_form" id="valid_form" value="1">
				</div>
				';
		
		return $html;
	}

	function get_partenaire(){
		$html = '';
		
		$html .= '	<H3>Partenaire : </H3>
					<div style="width: 100%;height: 80%;" >
						<div class="jq_part i_hover" adr="http://www.goshopnutrition.com" >	
							<img src="./partenaire/goShopNutrition.jpg" width="220px" height="60px" border="0"/>
						</div>
					</div>
				';
				
		return $html;
	}
	

	
	
	
	
	

	function get_mention_legal(){
		$html = '';
		
		$html = "<div id='texte'><br>
					<img src='design/gif/chauve_souris15.gif' style='float: right;' >
					<h2>Informations légales</h2><br>
					<h3>1. Présentation du site.</h3>
					<p>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site <a href='http://http://renaissance-des-sens.fr//' title='Bonnie Macraigne-Germanicus - http://renaissance-des-sens.fr/'>http://renaissance-des-sens.fr/</a> l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi :</p>
					<p><strong>Propriétaire</strong> : Bonnie Macraigne-Germanicus – Auto-entreprise 752 203 984 000 14 – 31 rue de provence bat C2<br />
					<strong>Créateur</strong>  : <a href='http://renaissance-des-sens.fr/'>Gael Nicolle</a><br />
					<strong>Responsable publication</strong> : Bonnie Macraigne-Germanicus – bonnie.renaissancedessens@gmail.com<br />
					Le responsable publication est une personne physique ou une personne morale.<br />
					<strong>Webmaster</strong> : Gael Nicolle – nicolle.gael@gmail.com<br />
					<strong>Hébergeur</strong> : OVH – 2 rue Kellermann 59100  Roubaix France<br />
					Crédits : les mentions légales ont étés générées et offertes par Subdelirium <a target='_blank' href='http://www.subdelirium.com/competences/creation-de-sites-web/creation-de-site-internet-en-charente/creation-de-site-internet-angouleme/' alt='creation site web angouleme'>création de site web Angoulême</a></p>
					
					<h3>2. Conditions générales d’utilisation du site et des services proposés.</h3>
					<p>L’utilisation du site <a href='http://http://renaissance-des-sens.fr//' title='Bonnie Macraigne-Germanicus - http://renaissance-des-sens.fr/'>http://renaissance-des-sens.fr/</a> implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site <a href='http://http://renaissance-des-sens.fr//' title='Bonnie Macraigne-Germanicus - http://renaissance-des-sens.fr/'>http://renaissance-des-sens.fr/</a> sont donc invités à les consulter de manière régulière.</p>
					<p>Ce site est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par Bonnie Macraigne-Germanicus, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.</p>
					<p>Le site <a href='http://http://renaissance-des-sens.fr//' title='Bonnie Macraigne-Germanicus - http://renaissance-des-sens.fr/'>http://renaissance-des-sens.fr/</a> est mis à jour régulièrement par Bonnie Macraigne-Germanicus. De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.</p>
					<h3>3. Description des services fournis.</h3>
					<p>Le site <a href='http://http://renaissance-des-sens.fr//' title='Bonnie Macraigne-Germanicus - http://renaissance-des-sens.fr/'>http://renaissance-des-sens.fr/</a> a pour objet de fournir une information concernant l’ensemble des activités de la société.</p>
					<p>Bonnie Macraigne-Germanicus s’efforce de fournir sur le site <a href='http://http://renaissance-des-sens.fr//' title='Bonnie Macraigne-Germanicus - http://renaissance-des-sens.fr/'>http://renaissance-des-sens.fr/</a> des informations aussi précises que possible. Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>
					<p>Tous les informations indiquées sur le site <a href='http://http://renaissance-des-sens.fr//' title='Bonnie Macraigne-Germanicus - http://renaissance-des-sens.fr/'>http://renaissance-des-sens.fr/</a> sont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site <a href='http://http://renaissance-des-sens.fr//' title='Bonnie Macraigne-Germanicus - http://renaissance-des-sens.fr/'>http://renaissance-des-sens.fr/</a> ne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p>
					<h3>4. Limitations contractuelles sur les données techniques.</h3>
					<p>Le site utilise la technologie JavaScript.</p>
					<p>Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour</p>
					<h3>5. Propriété intellectuelle et contrefaçons.</h3>
					<p>Bonnie Macraigne-Germanicus est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels.</p>
					<p>Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : Bonnie Macraigne-Germanicus.</p>
					<p>Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>
					<h3>6. Limitations de responsabilité.</h3>
					<p>Bonnie Macraigne-Germanicus ne pourra être tenue responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site http://renaissance-des-sens.fr/, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.</p>
					<p>Bonnie Macraigne-Germanicus ne pourra également être tenue responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site <a href='http://http://renaissance-des-sens.fr//' title='Bonnie Macraigne-Germanicus - http://renaissance-des-sens.fr/'>http://renaissance-des-sens.fr/</a>.</p>
					<p>Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. Bonnie Macraigne-Germanicus se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, Bonnie Macraigne-Germanicus se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie…).</p>
					<h3>7. Gestion des données personnelles.</h3>
					<p>En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l'article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.</p>
					<p>A l'occasion de l'utilisation du site <a href='http://http://renaissance-des-sens.fr//' title='Bonnie Macraigne-Germanicus - http://renaissance-des-sens.fr/'>http://renaissance-des-sens.fr/</a>, peuvent êtres recueillies : l'URL des liens par l'intermédiaire desquels l'utilisateur a accédé au site <a href='http://http://renaissance-des-sens.fr//' title='Bonnie Macraigne-Germanicus - http://renaissance-des-sens.fr/'>http://renaissance-des-sens.fr/</a>, le fournisseur d'accès de l'utilisateur, l'adresse de protocole Internet (IP) de l'utilisateur.</p>
					<p> En tout état de cause Bonnie Macraigne-Germanicus ne collecte des informations personnelles relatives à l'utilisateur que pour le besoin de certains services proposés par le site <a href='http://http://renaissance-des-sens.fr//' title='Bonnie Macraigne-Germanicus - http://renaissance-des-sens.fr/'>http://renaissance-des-sens.fr/</a>. L'utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu'il procède par lui-même à leur saisie. Il est alors précisé à l'utilisateur du site <a href='http://http://renaissance-des-sens.fr//' title='Bonnie Macraigne-Germanicus - http://renaissance-des-sens.fr/'>http://renaissance-des-sens.fr/</a> l’obligation ou non de fournir ces informations.</p>
					<p>Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données personnelles le concernant, en effectuant sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.</p>
					<p>Aucune information personnelle de l'utilisateur du site <a href='http://http://renaissance-des-sens.fr//' title='Bonnie Macraigne-Germanicus - http://renaissance-des-sens.fr/'>http://renaissance-des-sens.fr/</a> n'est publiée à l'insu de l'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l'hypothèse du rachat de Bonnie Macraigne-Germanicus et de ses droits permettrait la transmission des dites informations à l'éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l'utilisateur du site <a href='http://http://renaissance-des-sens.fr//' title='Bonnie Macraigne-Germanicus - http://renaissance-des-sens.fr/'>http://renaissance-des-sens.fr/</a>.</p>
					<p>Le site n'est pas déclaré à la CNIL car il ne recueille pas d'informations personnelles. .</p>
					<p>Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>
					<h3>8. Liens hypertextes et cookies.</h3>
					<p>Le site <a href='http://http://renaissance-des-sens.fr//' title='Bonnie Macraigne-Germanicus - http://renaissance-des-sens.fr/'>http://renaissance-des-sens.fr/</a> contient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de Bonnie Macraigne-Germanicus. Cependant, Bonnie Macraigne-Germanicus n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.</p>
					<p>La navigation sur le site <a href='http://http://renaissance-des-sens.fr//' title='Bonnie Macraigne-Germanicus - http://renaissance-des-sens.fr/'>http://renaissance-des-sens.fr/</a> est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures de fréquentation.</p>
					<p>Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son ordinateur de la manière suivante, pour refuser l’installation des cookies :</p>
					<p>Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous les cookies. Validez sur Ok.</p>
					<p>Sous Firefox : en haut de la fenêtre du navigateur, cliquez sur le bouton Firefox, puis aller dans l'onglet Options. Cliquer sur l'onglet Vie privée.
					  Paramétrez les Règles de conservation sur :  utiliser les paramètres personnalisés pour l'historique. Enfin décochez-la pour  désactiver les cookies.</p>
					<p>Sous Safari : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par un rouage). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section 'Confidentialité', cliquez sur Paramètres de contenu. Dans la section 'Cookies', vous pouvez bloquer les cookies.</p>
					<p>Sous Chrome : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par trois lignes horizontales). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section 'Confidentialité', cliquez sur préférences.  Dans l'onglet 'Confidentialité', vous pouvez bloquer les cookies.</p>
					
					<h3>9. Droit applicable et attribution de juridiction.</h3>
					<p>Tout litige en relation avec l’utilisation du site <a href='http://http://renaissance-des-sens.fr//' title='Bonnie Macraigne-Germanicus - http://renaissance-des-sens.fr/'>http://renaissance-des-sens.fr/</a> est soumis au droit français. Il est fait attribution exclusive de juridiction aux tribunaux compétents de Paris.</p>
					<h3>10. Les principales lois concernées.</h3>
					<p>Loi n° 78-87 du 6 janvier 1978, notamment modifiée par la loi n° 2004-801 du 6 août 2004 relative à l'informatique, aux fichiers et aux libertés.</p>
					<p> Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique.</p>
					<h3>11. Lexique.</h3>
					<p>Utilisateur : Internaute se connectant, utilisant le site susnommé.</p>
					<p>Informations personnelles : « les informations qui permettent, sous quelque forme que ce soit, directement ou non, l'identification des personnes physiques auxquelles elles s'appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).</p>	
				</div>
				";
		
		return $html;
	}












































?>