
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

<script>
	function startBlink(){
		window.blinker = setInterval(function(){
			if(window.blink){
			   $('.plop').css('color','red');
			   window.blink=false;
			 }
			else{
					$('.plop').css('color','white');
					window.blink = true;
			}
		},500);
	  }

	  function stopBlink(){
		if(window.blinker) clearInterval(window.blinker);
	  } 
</script>
<?php	include_once("./include/head.php");	?>   
   <body onload="load_Menu();startBlink();">
	<?php
		include_once("./include/en_tete.php");
		include_once("./include/menu.php");
    ?>
   
   
	   
		<div id="corps">
		
			<img src="./images/construction.jpg">
			
		</div>
	
	<?php
	   include_once("./include/pied.php");
	?>
   </body>
</html>
