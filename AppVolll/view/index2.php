<?php
include('../model/dbconnection.php');
session_start();
				

?>
<!DOCTYPE html>
<html lang="en">

<?php
include('heder.php');
?>



<body>
	<?php
	include('navbar.php');
	?>

	<div class="allinput">
	          <form method="post" action="recherche.php">
	       
	            <h1>les vols</h1>
	      
	            <input type="text" name="villedepart" id="LieuD" placeholder="Ville de départ" class="ipt">
	            <input type="text" name="villearrivee" id="LieuA" placeholder="Ville d arrivée" class="ipt">
	            <input type="submit" name="submit-search" value="Chercher les vols" id="btn"> 
	          </form>  
	</div>
	<?php
	include('script.php');
	?>


</body>

</html>