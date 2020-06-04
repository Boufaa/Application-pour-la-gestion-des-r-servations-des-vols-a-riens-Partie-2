<?php
include('../model/usersclass.php');
include('../model/reservation_class.php');
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
		<?php
		$id = $_SESSION["id_user"];
		$user = new User();
		$res = $user -> user_show($id);
		$row = $res->fetch_assoc();
		?>
		
								
							

							<div class="allinput">
					          <form method="POST" action="../controller/user_back.php">
					       
					            <h1>MODIFICATION INFORMATIONS PROFILE</h1>
					      		<input name="id" value="<?= $row['id_user']; ?>" type="hidden">
					            <input name="nom" id="username" value="<?= $row['nom']; ?>" class="ipt" type="text">
					            <input name="prenom" id="name" type="text" value="<?= $row['prenom']; ?>" class="ipt">
					            <input name="mail" id="email" type="EMAIL" value="<?= $row['email']; ?>" class="ipt">
					            <input name="password" id="text" type="password" value="<?= $row['password']; ?>" class="ipt">
					            <input name="update_user_info" type="submit" value="Modifier" id="btn"> 
					          </form>  
					        </div>






	<?php
	include('script.php');
	?>

</body>
</html>



