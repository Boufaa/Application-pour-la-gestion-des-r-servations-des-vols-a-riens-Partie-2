<?php
session_start();
include('../model/volsclass.php');
?>

<html lang="en">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="../public/css/style.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
	integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<?php
include('heder.php');
?>

<body>

	<?php
include('navbar.php');
?>
	
			<div class="container py-3" style="margin-left: 22%;">
					<div class="row ">
						<div class="col-md-8 px-3">
							<div class="card-block px-3" style=" margin-top: 20%;">

								<?php
								$id = $_GET['id'];
								$vol = new Vol();
								$res = $vol -> vol_show_id($id);
								$row = $res->fetch_assoc();
								?>

								<h4 class="card-title">Depart :<span style="color:#3498db;"><?= $row['depart']; ?></span>
								</h4>
								<h4 class="card-title">Destination : <span
										style="color:#3498db;"><?= $row['destination']; ?></span></h4>
								<h4 class="card-title">Date depart :<span style="color:#3498db;"><?= $row['date_depart']; ?>
									</span> </h4>
								<h4 class="card-title">Nomber de places : <span
										style="color:#3498db;"><?= $row['num_place'];; ?></span></h4>
								<h4 class="card-title">Prix : <span style="color:#3498db;"><?= $row['prix']; ?> DH</span>
								</h4>
								<div class="btnannuler">
									<input href="index.php" type="submit" value="Annuler le vol" id="btn">
								</div>
							</div>
						</div>
					</div>
				
			</div>
	</section>
	


			<div class="allinput" style="margin-top: 40%;">
	       
	            <h1>les Informations Passager</h1>
	      
	            <input type="text" name="nom" id="LieuD" placeholder="Nom" class="ipt">
	            <input type="text" name="prenom" id="LieuA" placeholder="Prenom" class="ipt">
	            <input type="number" name="age" id="LieuA" placeholder="Age" class="ipt">
	            <input type="text" name="pays" id="LieuA" placeholder="Pays" class="ipt">
	            <input type="text" name="adresse" id="LieuA" placeholder="Adresse" class="ipt">
	            <input type="number" name="tele" id="LieuA" placeholder="Numéro de telephone" class="ipt">
	            <input type="email" name="email" id="LieuA" placeholder="Email" class="ipt">
	            <input type="number" name="passeport" id="LieuA" placeholder="Numéro de passeport" class="ipt">
	            <input type="submit" name="add" value="Réservation" id="btn">  
	        </div>












	<?php
	include('script.php');
	?>
</body>

</html>