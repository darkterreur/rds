<?php 
	@session_start();
	//print_r($_GET);
	//print_r($_SERVER['HTTP_USER_AGENT']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <?php 
   		include_once("./include/fonction.php");
   		include_once("./include/fonc_compt.php");  
   		echo get_head();	
   	?>   
   <body>
   		<!-- <img src="design/gif/lightning7.gif"  width="500px" height="500px" style="position:absolute" > -->
   		<div id="wrapper">
   			<div class="under_wrapper">
   				   				
   				<?php 
   				
   					echo get_header(); 
   					//echo get_container(); 
					createAccountForm();
					//createClientTypeForm();
   					echo '<div>'.get_footer().'</div>'; 			
					//echo onglet();
					//echo menuAdmin();
   				   				 
				?>
									




   				 
   			</div>
   		</div>
   </body>
   <?php echo include_js(); ?>
</html>


<script>
	$(document).ready(function() {
		get_data_container('accu');
	})


	
</script>
