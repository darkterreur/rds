<?php
	include_once("../include/fonction.php"); 
	
	add_slashes($_POST);
	
	//print_r($_POST);



/*

	// Pour le passer en UTF-8 par exemple :
		$mail->CharSet = 'UTF-8';
		
		// De qui vient le message, e-mail puis nom
		$mail->From = "moi@vous.la";
		$mail->FromName = "Nom Prénom";
		
		// Définition du sujet/objet
		$mail->Subject = "Un mail envoyé avec PHPMailer!";
		
		// On définit le corps du message
		$mail->Body = "Bonjour!";
		
		// Il reste encore à ajouter au moins un destinataire
		// (ou plus, par plusieurs appel à cette méthode)
		$mail->AddAddress("hey@ho.com", "HeyHo");
		
		// On met notre CV en pièce jointe
		$mail->AddAttachment('./CV.pdf');
		*/
		
		
		$body = '<html>
					<body>
						<center><br>
							Nom : '.$_POST['nom_cont'].'
							<br>
							Telephone : '.$_POST['tel_cont'].'
							<br>
							Email : '.$_POST['email_cont'].'
							<br>
							'.$_POST['message_cont'].'
							<br>
					</body>
				</html>
				';
				
			//$body = $_POST['message_cont'];
				
		
		$a_opt = array(	'CharSet' => ''
						,'Host' => 'smtp.gmail.com'
						,'Port' => '465'
						,'Username' => 'bonnie.renaissancedessens@gmail.com'
						,'Password' => '269926GaelB@'
						,'From' => 'bonnie.renaissancedessens@gmail.com'
						,'FromName' => $_POST['nom_cont']
						,'AddAddress' => 'bonnie.renaissancedessens@gmail.com'
						,'AddReplyTo' => 'bonnie.renaissancedessens@gmail.com'
						,'Subject' => 'Contact Renaissance Des Sens'
						,'Body' => $body	
						,'AddAttachment' => ''
						);


		echo sendMailHtml($a_opt);


	
?>