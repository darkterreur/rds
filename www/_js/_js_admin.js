//***************************************//
//			Function admin
//***************************************//


//Function administrateur
function get_data_admin(elem){
	console.log('get_data_admin');
	var dataForm = 'ctxt='+elem;

	$.ajax({
		type: "POST",
		processData: true,
		url: './ajax/ajx_data_admin.php',
		data: dataForm,
		dataType: 'html'
	})
	.done(function( Data ) {
	 	//console.log('succes');
	 	//console.log(Data);
	 	 $('#wrapper_admin').hide('slow', function(){
		 	 $('#wrapper_admin').html(Data);
		 	 $('#wrapper_admin').show('slow');
	 	 });
	 	  	
	 })
	.fail(function(Data) {
		console.log("erreur load data container ctxt -> "+ctxt);
		console.log(Data);
	});
}


function login(){
	if( $('#login_admin').val() == '' || $('#pwd_admin').val() == '' ){
		noty({text:"Error field blank ! ",type:"error",layout:"topCenter",timeout:1700});
	}else{
		var dataForm = $('#form_login_admin').serializeArray();
		
		$.ajax({
			type: "POST",
			processData: true,
			url: './ajax/ajx_test_login_admin.php',
			data: dataForm,
			dataType: 'html'
		})
		.done(function( Data ) {
		 	//console.log('succes');
		 	//console.log(Data);
		 	if(Data == 1){
			 	get_data_admin('menu_admin');
		 	}else if(Data == 0){
			 	noty({text:"Invalid Login ! ",type:"error",layout:"topCenter",timeout:1700});
		 	}else{
			 	console.log('retour data login invalid');
		 	}
		 })
		.fail(function(Data) {
			console.log("erreur load data container ctxt -> "+ctxt);
			console.log(Data);
		});	
	}
}

function deleteElement(elem, id){
	console.log('deleteElement('+elem+', '+id+')');
	var dataForm = 'ctxt=delete&elem='+elem+'&id='+id;
	$.ajax({
		type: "POST",
		processData: true,
		url: './ajax/ajx_data_admin.php',
		data: dataForm,
		dataType: 'json'
	})
	.done(function( Data ) {
		
		console.log('succes delete element');
		console.log(Data);
		
		//on delete la ligne du tableau si la requete c'est bien passé oublie pas de rajouter un controle sur data pour voir si on retourne bien ce qu'il faut
		$("#"+elem+"_"+id).remove();
		
	})
	.fail(function(Data) {
		console.log("erreur delete element -> "+elem);
		console.log(Data);
	});
}


function validElement(elem, id){
	console.log('validElement('+elem+', '+id+')');
	var dataForm = 'ctxt=valid&elem='+elem+'&id='+id;
	$.ajax({
		type: "POST",
		processData: true,
		url: './ajax/ajx_data_admin.php',
		data: dataForm,
		dataType: 'json'
	})
	.done(function( Data ) {
		
		console.log('succes valid element');
		console.log(Data);
		
		//on delete la ligne du tableau si la requete c'est bien passé oublie pas de rajouter un controle sur data pour voir si on retourne bien ce qu'il faut
		$("#"+elem+"_"+id).remove();
		
	})
	.fail(function(Data) {
		console.log("erreur valid element -> "+elem);
		console.log(Data);
	});
}

//fonction de sauvegarde de formulaire
//elem est pour l'id du formulaire
//le id est dans le cas d'une modification on met a 0 si c'est un nouveau
function saveElement(elem, id){
	console.log('saveElement('+elem+', '+id+')');
	
	
	console
	//il faut que je rajoute elem et id a dataform ainsi que le context pour le switch
	var dataForm = $('#form_'+elem).serializeArray();
	//dataForm.push({'elem':elem,'id':id});
	dataForm.push({'name': 'elem' ,'value' : elem ,'name' : 'id' ,'value':id});
	
	
	var a = [];
	a.push(12);
	a.push(32);
	
	console.log(a);
	
	
	console.log('saveElement ->');
	console.log(dataForm);
	
	/*

	
	$.ajax({
		type: "POST",
		processData: true,
		url: './ajax/ajx_save_elem.php',
		data: dataForm,
		dataType: 'json'
	})
	.done(function( Data ) {
		
		console.log('succes save element');
		console.log(Data);
				
	})
	.fail(function(Data) {
		console.log("erreur save element -> "+elem);
		console.log(Data);
	});
	
*/
	
	
	
}

