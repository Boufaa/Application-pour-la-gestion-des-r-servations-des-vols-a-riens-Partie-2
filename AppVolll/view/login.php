<!DOCTYPE html>
<html lang="en">

<?php
include('heder.php');
?>

<body>
	


	<div class="allinput">
	          <form action="../controller/login-back.php" method="POST">
	       
	            <h1>Se connecter</h1>
	      
	            <input type="text" name="mail" id="LieuD" placeholder="E-mail" class="ipt">
	            <input type="password" name="password" id="LieuA" placeholder="Password" class="ipt">
	            <input type="submit" name="go2" value="S'identifier" id="btn"> 
	            <p>Si vous avez déjà compte, merci de vous identifiez <span><a href="index.php">ici</a></span></p>
	          </form>  
	</div>
</body>

</html>