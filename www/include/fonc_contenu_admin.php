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
										<div class="i_toolbaradmin tool_add" onclick=> 
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
	