<!DOCTYPE html>
<html lang="en">

<?php
include('heder.php');
?>

<body>
							<div class="allinput">
					          <form action="../controller/login-back.php" method="POST">
					       
					            <h1>Créez un compte</h1>
					            <input name="nom" id="username" placeholder="Nom" class="ipt" type="text">
					            <input name="prenom" id="name" type="text" placeholder="Prenom" class="ipt">
					            <input name="mail" id="email" type="EMAIL" placeholder="E-mail" class="ipt">
					            <input name="password" id="text" type="password" placeholder="Password" class="ipt">
					            <input name="go" type="submit" value="S'identifier" id="btn"> 
					            <p>vous avez déjà un compte connectez-vous <span><a href="login.php">ici</a></span></p>
					          </form>  
					        </div>

</body>

</html>