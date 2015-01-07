<?php
//////////////////////////////////////////////////////////////////////////////////
//				Fonction contenu des pages Admin 
//////////////////////////////////////////////////////////////////////////////////
	function get_login(){
		$html = '';
		
		$html .=	'<div class="bloc_login">
		   				<div style="height: 15%;margin-right: 2%;margin-top: 2%;">
							<i style="font-size: 30px;float: right;" class="fa fa-cogs"></i>
						</div>
		   				<form method="post" name="form_login_admin" id="form_login_admin">
		   					<div style="">
								<div class="label">
									<label>Login : </label>
								</div>
								<div class="input">
									<input style="width: 75%;" type="text" name="login_admin" id="login_admin">
								</div>
							</div>
		   					<div style="">
								<div class="label">
									<label>Password : </label>
								</div>
								<div class="input">
									<input style="width: 75%;" type="password" name="pwd_admin" id="pwd_admin">
								</div>
							</div>
		   					<div style="float: left;margin-left: 38%;margin-top: 1%;">
								<div class="button" id="annuler" onclick="return false;">Reset</div>
								<div class="button" style="margin-left: 6px;" id="valider" onclick="login();return false;">Send</div>				 
							</div>
		   				</form>						
		   			</div>';
				
		return $html;
	}
	
	function menu_admin(){
		$html = '';
		
		if(2 == 2){
			$pulse = 'pulseOn';
		}else{
			$pulse = '';
		}
		
		$html .= '	<div class="bloc_menu_admin">
						<div class="wrapper_tool">
							<div class="i_toolbaradmin i_hover jq_menu_admin" attr="gestion_com">
								<i class="fa fa-tasks  S30" onclick=""/>
									<span class="S12" style="text-align:center">Gérer les commentaires</span>
								</i>	
							</div>
							<div class="i_toolbaradmin i_hover jq_menu_admin '.$pulse.'" attr="gestion_valid_com" >
								<i class="fa fa-gavel  S30" onclick=""/>
									<span class="S12" style="text-align:center">Gérer la validation des commentaires</span>
								</i>	
							</div>
							<div class="i_toolbaradmin i_hover jq_menu_admin" attr="gestion_connexion" style="margin-right: 0px;">
								<i class="fa fa-android  S30" onclick=""/>
									<span class="S12" style="text-align:center">Panneau de connexion</span>
								</i>	
							</div>
						</div>
						<div class="wrapper_tool">
							<div class="i_toolbaradmin i_hover jq_menu_admin" attr="gestion_type_client">
								<i class="fa fa-users  S30" onclick=""/>
									<span class="S12" style="text-align:center">Gérer les type de clients</span>
								</i>	
							</div>
							<div class="i_toolbaradmin i_hover jq_menu_admin " attr="gestion_client" >
								<i class="fa fa-user  S30" onclick=""/>
									<span class="S12" style="text-align:center">Gérer les clients</span>
								</i>	
							</div>
							<div class="i_toolbaradmin i_hover jq_menu_admin" attr="gestion_pizza" style="margin-right: 0px;">
								<i class="fa fa-apple  S30" onclick=""/>
									<span class="S12" style="text-align:center">Gérer les pizzas</span>
								</i>	
							</div>
						</div>
					</div>
				';
		
		return $html;
	}
	
	function gestion_comm(){
		$html = '';
		
		$html .= '	<div class="bloc_global">
						<div id="titre_body">
							<font style="font-size:2.5em; margin-left:2.45%">Gérer les commentaires</font>
						</div>
						<div class="btn_return">
							<div class="button" style="margin-left: 6px;" onclick="get_data_admin(\'menu_admin\')">Return</div>	
						</div>
						
						
						
						<table id="listeComm" cellpadding="0" cellspacing="0" border="0" class="display">
							<thead>
								<tr>
									<th style="width: 10px;" >Id</th>
									<th style="width: 80px;" >Auteur</th>
									<th style="width: 130px;" >Date</th>
									<th>Message</th>
									<th style="width: 80px;">
									</th>
								</tr>
							</thead>
							<tbody class="tableau">';
							

				
		$sql = 'SELECT * FROM `livre` WHERE `status`= 2 ORDER BY `date_mess` DESC ';
		
		$a_res = connexion::select($sql);
		
		//$html .= '<pre>'.print_r($a_res).'</pre>';
		//print_r($a_res);
		
		if(!empty($a_res)){
		
			foreach($a_res as $key => $value){
				$html .= "	<tr id='livre_".$value['id']."' >	
								<td >".$value['id']."</td>
								<td >".$value['prenom_user']."</td>
								<td >".$value['date_mess']."</td>
								<td >".$value['message']."</td>
								<td class='modify_user'>
									<div align='center' >	
										<div class='i_toolbaradmin' onclick=\" \"> 
											<!-- <i class='fa fa-pencil i_hover'></i> -->
										</div>
										<div class='i_toolbaradmin' onclick=\"deleteElement('livre',".$value['id']."); \"> 
											<i class='fa fa-times i_hover'></i>
										</div>
									</div>
								</td>	
						</tr>";	

			}
		}
		
		
		$html .= '		</tbody>
					</table>
				</div>';
				
		$html .= '<script>
					var table = $("#listeComm").dataTable({
									"aoColumnDefs": [
								      	{ "bSearchable": false, "aTargets": [ 4 ] }
									  	,{ "bSortable": false, "aTargets": [ 4 ] }
								    ]
								});				
				</script>

				';
		
		return $html;
	}

	function valid_comm(){
		$html = '';
		
		$html .= '	<div class="bloc_global">
						<div id="titre_body">
							<font style="font-size:2.5em; margin-left:2.45%">Gérer les commentaires</font>
						</div>
						<div class="btn_return">
							<div class="button" style="margin-left: 6px;" onclick="get_data_admin(\'menu_admin\')">Return</div>	
						</div>
						
						
						
						<table id="listeValidComm" cellpadding="0" cellspacing="0" border="0" class="display">
							<thead>
								<tr>
									<th style="width: 10px;" >Id</th>
									<th style="width: 80px;" >Auteur</th>
									<th style="width: 130px;" >Date</th>
									<th>Message</th>
									<th style="width: 80px;">
										
									</th>
								</tr>
							</thead>
							<tbody class="tableau">';
							

				
		$sql = 'SELECT * FROM `livre` WHERE `status`= 3 ORDER BY `date_mess` DESC ';
		
		$a_res = connexion::select($sql);
		
		//$html .= '<pre>'.print_r($a_res).'</pre>';
		//print_r($a_res);
		
		if(!empty($a_res)){
		
			foreach($a_res as $key => $value){
				$html .= "	<tr id='livre_".$value['id']."' >	
								<td >".$value['id']."</td>
								<td >".$value['prenom_user']."</td>
								<td >".$value['date_mess']."</td>
								<td >".$value['message']."</td>
								<td class='modify_user'>
									<div align='center' >	
										<div class='i_toolbaradmin' onclick=\" validElement('livre',".$value['id']."); \"> 
											<i class='fa fa-check i_hover'></i>
										</div>
										<div class='i_toolbaradmin' onclick=\" deleteElement('livre',".$value['id']."); \"> 
											<i class='fa fa-times i_hover'></i>
										</div>
									</div>
								</td>	
						</tr>";	

			}
		}
		
		
		$html .= '		</tbody>
					</table>
				</div>';
				
		$html .= '<script>
					var table = $("#listeValidComm").dataTable({
									"aoColumnDefs": [
								      	{ "bSearchable": false, "aTargets": [ 4 ] }
									  	,{ "bSortable": false, "aTargets": [ 4 ] }
								    ]
								});				
				</script>

				';
		
		return $html;
	}
	
	
	function gestion_type_client(){
		$html = '';
		
		$html .= '	<div class="bloc_global">
						<div id="titre_body">
							<font style="font-size:2.5em; margin-left:2.45%">Gérer types de clients</font>
						</div>
						<div class="btn_return">
							<div class="button" style="margin-left: 6px;" onclick="get_data_admin(\'menu_admin\')">Return</div>	
						</div>
						
						
						
						<table id="listeTpcl" cellpadding="0" cellspacing="0" border="0" class="display">
							<thead>
								<tr>
									<th style="width: 20px;" >Id</th>
									<th style="width: 180px;" >libelle</th>
									<th style="width: 60px;" >Date creation</th>
									<th style="width: 60px;">
										<div class="i_toolbaradmin tool_add" onclick="get_data_admin(\'new_type_client\')" > 
											<i class="fa fa-plus-circle"></i>
										</div>
									</th>
								</tr>
							</thead>
							<tbody class="tableau">';
							

				
		$sql = 'SELECT * FROM `type_cli` WHERE `sta_tpcl` = 2 ';
		
		$a_res = connexion::select($sql);
		
		//$html .= '<pre>'.print_r($a_res).'</pre>';
		//print_r($a_res);
		
		if(!empty($a_res)){
		
			foreach($a_res as $key => $value){
				$html .= "	<tr>	
								<td >".$value['id_tpcl']."</td>
								<td >".$value['libelle_tpcl']."</td>
								<td >".$value['date_add_tpcl']."</td>
								<td class='modify_user'>
									<div align='center' >	
										<div class='i_toolbaradmin' onclick=\" \"> 
											<i class='fa fa-pencil i_hover'></i>
										</div>
										<div class='i_toolbaradmin' onclick=' deleteElement('type_cli',".$value['id_tpcl']."); '> 
											<i class='fa fa-times i_hover'></i>
										</div>
									</div>
								</td>	
						</tr>";	

			}
		}
		
		
		$html .= '		</tbody>
					</table>
				</div>';
				
		$html .= '<script>
					var table = $("#listeTpcl").dataTable({
									"aoColumnDefs": [
								      	{ "bSearchable": false, "aTargets": [ 3 ] }
									  	,{ "bSortable": false, "aTargets": [ 3 ] }
								    ]
								});				
				</script>

				';
		
		return $html;
	}
	
	
	///////////////////// formulaire ///////////////////////////////
	
	
	/////////////////////////: formulaire de creation de compte utilisateur
	function createAccountForm()
	{
		?>

<div class="createAccountForm">
		<form action="" id="createAccountForm" method="post" name="createAccountForm">
			
		<?php
			if(isset($session))
			{
				//$rq = Connexion::select('SELECT `libelle_tpcl` FROM `type_cli` WHERE 1 limit 100');
				
		?>	
	
			<label for="createAccountForm_TypeClient"><abbr class="rq" title=Obligatoire>*</abbr>            Type Client :</label> 
			<select class="" id="createAccountForm_TypeClient" name="createAccountForm.TypeClient">
				<?php 
				foreach($rq as $key => $value)
				{
				echo "<option value='".$value."'>".$value."</option>"; 	
				}
				?>
				
			</select> </br>
		<?php
			}
		?>	
			
			
			<label for="createAccountForm_Gender"><abbr class="rq" title=Obligatoire>*</abbr>Civilit&#233; :</label>        
			<select class="" id="createAccountForm_Gender" name="createAccountForm.Gender"><option value="Mr">Monsieur</option>
				<option value="Mrs">Madame</option>
				<option value="Ms">Mademoiselle</option>
			</select>
			<label for="createAccountForm_Name"><abbr class="rq" title="Obligatoire">*</abbr>            Nom :</label>		
			<input class="" id="createAccountForm_Name" name="createAccountForm.Name" type="text" value="" />  
			<label for="createAccountForm_FirstName"><abbr class="rq" title="Obligatoire">*</abbr>            Pr&#233;nom :</label>        
			<input class="" id="createAccountForm_FirstName" name="createAccountForm.FirstName" type="text" value="" />
			<label for="createAccountForm_Email"><abbr class="rq" title="Obligatoire">*</abbr>Email :</label>            
			<input class="" id="createAccountForm_Email" name="createAccountForm.Email" type="text" value="" />            
			<label for="createAccountForm_Password"><abbr class="rq" title="Obligatoire">*</abbr>Mot de passe :</label>            
			<input class="" id="createAccountForm_Password" maxlength="15" name="createAccountForm.Password" type="password" />
			<label for="createAccountForm_ConfirmePassword"><abbr class="rq" title="Obligatoire">*</abbr>Confirmation du mot de passe :</label>            
			<input class="" id="createAccountForm_ConfirmePassword" maxlength="15" name="createAccountForm.ConfirmePassword" type="password" />
			<label for="createAccountForm_BirthDate">
				<abbr class="rq" title="Obligatoire">*</abbr>Date de naissance :<span class="tip">(jj/mm/aaaa)</span>
			</label>		
			<input class="" id="createAccountForm_BirthDate" name="createAccountForm.BirthDate" type="text" value="" />        
			<label for="createAccountForm_Mobile"><abbr class="rq" title="Obligatoire">*</abbr>            T&#233;l&#233;phone mobile :</label>	
			<input class="" id="createAccountForm_Mobile" name="createAccountForm.Mobile" type="text" value="" />  
			<label for="createAccountForm_Tel"><abbr class="rq" title="Obligatoire">*</abbr>            T&#233;l&#233;phone fixe :</label>		
			<input class="" id="createAccountForm_Tel" name="createAccountForm.Tel" type="text" value="" />
			<label for="createAccountForm_NumAndStreet"><abbr class="rq" title="Obligatoire">*</abbr>            Num&#233;ro et nom de rue :</label>		
			<input class="" id="createAccountForm_NumAndStreet" name="createAccountForm.NumAndStreet" type="text" value="" />
			<label for="FormData_Building">            B&#226;timent : </label>		
			<input class="" id="FormData_Building" name="FormData.Building" type="text" value="" />
			<label for="FormData_Appt">            Appartement :</label>		
			<input class="" id="FormData_Appartment" name="FormData.Appartment" type="text" value="" />
			<label for="FormData_BpLocality">            BP/Lieu dit :</label>		
			<input class="" id="FormData_Locality" name="FormData.Locality" type="text" value="" /> 
			<label for="FormData_AddrComplement">Compl&#233;ment d&#39;adresse :<span class="tip">(digicode, etc.)</span></label>		
			<input class="" id="FormData_AddrComplement" name="FormData.AddrComplement" type="text" value="" /> 
			<label for="FormData_PostalCode">
				<abbr class="rq" title="Obligatoire">*</abbr>Code postal : <span class="tip">(ex. 33600)</span>
			</label>		
			<input class="" id="FormData_PostalCode" name="FormData.PostalCode" type="text" value="" />
			<label for="FormData_City"><abbr class="rq" title="Obligatoire">*</abbr>            Ville : </label>		
			<input class="" id="FormData_City" name="FormData.City" type="text" value="" /> 
			<!--<input type="submit" class="sbt button" value="Valider">-->
			<?php
			echo '<input type="submit" class="sbt button" value="Valider" id="form_bt_val">';
			echo "<script>$('#form_bt_val').click( function() { 
								console.log('toto dans la chambre');
								//validElement(elem, id);
							});
							</script>";
			if(!isset($session))
			{
			?>	
			<p class="tip">En cliquant sur Choisir ou Valider, j’accepte les <a href="" title="Voir les CGV ">Conditions Générales </a> </p>
		
			<?php
			}
			?>
		</form>
</div>
<script>
	$.validator.setDefaults({
		errorElement: "div",
		submitHandler: function() { alert("submitted!"); }
	});

	$().ready(function() {
		console.log('ok');
		$("#createAccountForm").validate({
			rules: {
				'createAccountForm.FirstName': {
					required:true,
					minlength: 2
				},
				'createAccountForm.Name':{ 
					required:true,
					minlength: 2
				},
				insc_username: {
					required: true,
					minlength: 2
				},
				'createAccountForm.Password': {
					required: true,
					minlength: 5,
				},
				'createAccountForm.ConfirmePassword': {
						equalTo: "#insc_password"
				},

				'createAccountForm.Email': {
					required: true,

					email: true
				},

				agree: "required"
			},
			messages: {
				'createAccountForm.FirstName': "Veuillez entrer le prénom",
				'createAccountForm.Name':  "Veuillez entrer le nom",
				'createAccountForm.FirstName': {
					required: "Veuillez entrer le prénom",
					minlength: "Le prénom doit avoir 2 caractères minimum"
				},
				'createAccountForm.Name': {
					required: "Veuillez entrer un nom",
					minlength: "Le nom doit avoir 2 caractères minimum"
				},
				'createAccountForm.Password': {
					required: "Veuillez fournir un mot de passe",
					minlength: "Le mot de passe doit avoir 5 caractères minimum"
				},
				'createAccountForm.ConfirmePassword': {

					equalTo: "Veuillez entrer le même mot de passe"
				},
				'createAccountForm.Email': "Veuillez entrer une adresse mail valide",
				
			}
		});
	},
		$("#createAccountForm_BirthDate").datepicker({
			beforeShow: function(input, inst)
			{
				inst.dpDiv.css({marginTop: -input.offsetHeight + 'px', marginLeft: input.offsetWidth+10 + 'px'});
			}
		})
	);
	
</script>

	<?php
		
	}
	
	////////////////: créer un nouveau type de client
	function create_client_type_form(){
		$html = '';

		$html .= '<div class="createClientTypeForm">		
					<label style="font-size: 20px;font-weight: bold;">Veuillez ajouter ci-dessous le libélé du nouveau type de client</label>
					<form action="" method="POST" id="form_create_type_client" name="createClientTypeForm" style="padding-top:25px">
						<label for="createClientTypeForm_label">Libellé : </label>			
						<input id="createClientTypeForm_label" name="createClientTypeForm.label" type="text">
						<input type="submit" class="sbt button" value="Valider" id="form_bt_val">
						<script>
							$("#form_bt_val").click( function() {
								console.log("je suis la"); 
								//saveElement("create_type_client", 0);
							});
						</script>
					</form>
				</div>';
		
		return $html;
	}