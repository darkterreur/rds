$('.jq_nav').on('click',function(){
	var e = $(this).attr('lib');

	get_data_container(e);
});
	
//sur le principe c'est la meme mais je ne veux pas qu'elle ai la meme classe d'appel pour eviter les confusions	
$('.jq_contact').on('click',function(){
	var e = $(this).attr('lib');

	get_data_container(e);
});

$('.jq_telephone').on('click',function(){
	$('#telephone').toggle();
});	
	
	
	
$('#wrapper_admin').on('click','.jq_menu_admin',function(){
	var e = $(this).attr('attr');

	//console.log('admin attr ->'+e);

	get_data_admin(e);
});


$('#second_right').on('click','.jq_part',function(){
	var adr = $(this).attr('adr');

	//console.log('adresse cible ->'+adr);
	
	window.open(adr);
	return false;

	
});


/*
$('#tel_cont').val('');
$('#email_cont').val('');
$('#message_cont').val('');	
*/
	
function chargement(elem){
	console.log('chargement ->'+elem);
	if(elem == 'contact'){
		$('#nom_cont').on('focusout',function(){
			var message = '';
			
			if( $('#nom_cont').val().length < 3){
				message = 'Champ invalide !';
				$('#error_nom_cont').val(message);
				$('#error_nom_cont').show();
				$('#valid_form').val(1);
			}else{
				$('#valid_form').val(0);
				$('#error_nom_cont').hide();
			}
		});
		
		//format -> 01.69.05.00.06
		$('#tel_cont').on('focusout',function(){
			var message = '';
			
			var tel_regex = /^0[1-9]([-\/. ]?[0-9]{2}){4}$/;
			
			if(!tel_regex.test( $('#tel_cont').val() ) ){ 
				message = "Champ invalide ! '06-01-02-03-04' ";
				$('#error_tel_cont').val(message);
				$('#error_tel_cont').show();
				$('#valid_form').val(1);
			}else{
				$('#error_tel_cont').val(0);
				$('#error_tel_cont').hide();
			}
		});
		
		$('#email_cont').on('focusout',function(){
			var message = '';
			
			var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
			
			if(!email_regex.test( $('#email_cont').val() ) ){ 
		   		message = "Champ invalide ! 'contact@yahoo.fr' ";
				$('#error_email_cont').val(message);
				$('#error_email_cont').show();
				$('#valid_form').val(1);	 
		   	}else{
			  	$('#error_email_cont').val(0);
				$('#error_email_cont').hide();	
			}
		});
	}else if(elem == 'liv_or'){
		$('#prenom_user').on('focusout',function(){
			var message = '';
			
			if( $('#prenom_user').val().length < 3){
				message = 'Champ invalide !';
				$('#error_prenom_user').val(message);
				$('#error_prenom_user').show();
				$('#valid_form').val(1);
			}else{
				$('#valid_form').val(0);
				$('#error_prenom_user').hide();
			}
		});
	}
}	
	
function verif_contact(){
	//console.log('verif_contact()');
	
	if( $('#nom_cont').val() == ''){
		//console.log('test nom_cont');
		message = 'Champ invalide !';
		$('#error_nom_cont').val(message);
		$('#error_nom_cont').show();
		$('#valid_form').val(1);
	}else{
		$('#valid_form').val(0);
		$('#error_nom_cont').hide();
	}
	
	if( $('#tel_cont').val() == '' ){ 
		//console.log('tel_cont');
		message = "Champ invalide !";
		$('#error_tel_cont').val(message);
		$('#error_tel_cont').show();
		$('#valid_form').val(1);
	}else{
		$('#valid_form').val(0);
		$('#error_tel_cont').hide();
	}

	if( $('#email_cont').val() == '' ){ 
   		//console.log('email_cont');
   		message = "Champ invalide !";
		$('#error_email_cont').val(message);
		$('#error_email_cont').show();
		$('#valid_form').val(1);	 
   	}else{
	  	$('#valid_form').val(0);
		$('#error_email_cont').hide();	
	}
	
	if( $('#message_cont').val() == '' ){ 
   		//console.log('message_cont');
   		message = "Champ invalide !";
		$('#error_message_cont').val(message);
		$('#error_message_cont').show();
		$('#valid_form').val(1);	 
   	}else{
	  	$('#valid_form').val(0);
		$('#error_message_cont').hide();	
	}
}	
	
function get_data_container(elem){
	var dataForm = 'ctxt='+elem;

	$.ajax({
		type: "POST",
		processData: true,
		url: './ajax/ajx_data_container.php',
		data: dataForm,
		dataType: 'html'
	})
	.done(function( Data ) {
	 	//console.log('succes');
	 	//console.log(Data);
	 	
	 	 $('#block_center').hide('slow', function(){
		 	 $('#block_center').html(Data);
		 	 $('#block_center').show('slow', function(){
				 chargement(elem); 
		 	 });
	 	 });
	 	 
	 	  	
	 })
	.fail(function(Data) {
		console.log("erreur load data container ctxt -> "+ctxt);
		console.log(Data);
	});
}
	
function envoiEmail(){
	//console.log('envoiEmail');
	verif_contact();
	if( $('#valid_form').val() == 0){
		
		var dataForm = $('#form_mail').serializeArray();
	
		$.ajax({
			type: "POST",
			processData: true,
			url: './ajax/ajx_send_mail.php',
			data: dataForm,
			dataType: 'html'
		})
		.done(function( Data ) {
		 	console.log('succes ->');
		 	console.log(Data);
		 	
		 	if(Data == true){
		 		//noty({text:"Succes Send Mail",type:"alert",layout:"topRight",timeout:1500});
		 		noty({text:"Succes Send Mail ! ",type:"success",layout:"center",timeout:1500});
		 		videForm(form_mail);
			 	//get_data_container('succes_mail');
		 	}else{
		 		noty({text:"Failed Send Mail ! ",type:"error",layout:"center",timeout:1500});
		 		videForm(form_mail);
			 	//get_data_container('fail_mail');
		 	}  	
		 	
		 })
		.fail(function(Data) {
			console.log("erreur envoiEmail ");
			console.log(Data);
		});	
	}	
}

function videForm(idForm){
	switch(idForm){
		case "form_mail":
			$('#nom_cont').val('');
			$('#tel_cont').val('');
			$('#email_cont').val('');
			$('#message_cont').val('');
			
			break;
			
		case "form_livre_or":
			$('#prenom_user').val('');
			$('#message_livr').val('');
			break;
	}
	/*

*/
}

function saveComm(){
	verif_comm();
	if( $('#valid_form').val() == 0){
		var dataForm = $('#form_livre_or').serializeArray();
	
		$.ajax({
			type: "POST",
			processData: true,
			url: './ajax/ajx_save_comm.php',
			data: dataForm,
			dataType: 'html'
		})
		.done(function( Data ) {
			if(Data == 1){
				noty({text:"Succes Send Comment ! ",type:"success",layout:"center",timeout:1500});
				videForm('form_livre_or');
				get_data_container('liv_or');
			}else{
				noty({text:"Failed Send Comment ! ",type:"error",layout:"center",timeout:1500});
				videForm('form_livre_or');
			}
		 	console.log('succes ->'+Data);
		 			 	
		 })
		.fail(function(Data) {
			console.log("erreur save commentaire ");
			console.log(Data);
		});
	}
}

function verif_comm(){
	//console.log('verif_contact()');
	if( $('#prenom_user').val() == ''){
		//console.log('test nom_cont');
		message = 'Champ invalide !';
		$('#error_prenom_user').val(message);
		$('#error_prenom_user').show();
		$('#valid_form').val(1);
	}else{
		$('#valid_form').val(0);
		$('#error_prenom_user').hide();
	}
		
	if( $('#message_livr').val() == '' ){ 
   		//console.log('message_cont');
   		message = "Champ invalide !";
		$('#error_message_livr').val(message);
		$('#error_message_livr').show();
		$('#valid_form').val(1);	 
   	}else{
	  	$('#valid_form').val(0);
		$('#error_message_livr').hide();	
	}
}















