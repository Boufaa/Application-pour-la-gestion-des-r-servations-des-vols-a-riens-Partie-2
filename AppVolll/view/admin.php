<?php
include('../model/volsclass.php');

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php
include('heder.php');
?>

	

	
	<link type="text/css" rel="stylesheet" href="../public/css/table.css" />




<body>

	
		

		

			<nav class="nav">
				

					<ul id="menu">
						<li><a href="admin.php">List des vols</a></li>
						<li><a href="admin_profile.php">Profile</a></li>
						<li><a>Bonjour: <?= $_SESSION["nom"]; ?> <?= $_SESSION["prenom"]; ?></a></li>
						<li><a href="logout.php" id="nm">Log Out</a></li>

							
						
					</ul>
				
			</nav>
			



			<br><br><br><br>
			<div class="col-md-12 well"  style="margin: 3%;padding: 2%;">
				<h3 style="color: #000;">List des vols desponible</h3>
				<hr style="border-top:1px dotted #ccc;" />
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#form_modal"><span
						class="glyphicon glyphicon-plus"></span> Ajouter des vols</button>
				<br /><br />
				<table class="table " id="table" >
					<thead class="alert-success">
						<tr>
							<th>Date départ</th>
							<th>Ville du départ</th>
							<th>Ville d'arrivée</th>
							<th>Nombre de Places</th>
							<th>Prix</th>
							<th>Staut de vol</th>
							<th>Action</th>

						</tr>
					</thead>
					<tbody style="background-color:#fff;">
						<?php

						$vol = new Vol();
   						$res = $vol -> vol_show_all();
					
					while($fetch = mysqli_fetch_array($res)){
				?>
						<tr>
							<td><?php echo $fetch['date_depart']?></td>
							<td><?php echo $fetch['depart']?></td>
							<td><?php echo $fetch['destination']?></td>
							<td><?php echo $fetch['num_place']?></td>
							<td><?php echo $fetch['prix']?></td>
							<td><?php echo $fetch['statut']?></td>
							<td><button class="btn btn-warning" data-toggle="modal" type="button"
									data-target="#update_modal<?php echo $fetch['id']?>"><span
										class="glyphicon glyphicon-edit"></span> Modifier</button></td>
						</tr>
						<?php
					
					include 'vol_update.php';
					
					}
				?>
					</tbody>
				</table>
			</div>


			


			<div class="modal fade" id="form_modal" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<form method="POST" action="../controller/admin_back.php">
							<div class="modal-header">
								<h3 class="modal-title">Ajouter des vols</h3>
							</div>
							<div class="modal-body">
								<div class="col-md-2"></div>
								<div class="col-md-8">
									<div class="form-group">
										<label>Date départ:</label>
										<input type="datetime-local" class="form-control" id="recipient-name"
											required="required" name="date_depart">
									</div>
									<div class="form-group">
										<label>Ville du départ:</label>
										<input type="text" class="form-control" id="recipient-name" required="required"
											name="vdepart">
									</div>
									<div class="form-group">
										<label>Ville d'arrivée:</label>
										<input type="text" class="form-control" id="recipient-name" required="required"
											name="varrivee">
									</div>
									<div class="form-group">
										<label>Nombre de Places:</label>
										<input type="number" class="form-control" id="recipient-name"
											required="required" name="npalace">
									</div>
									<div class="form-group">
										<label>Prix:</label>
										<input type="text" name="prix" class="form-control" required="required" />
									</div>
									<div class="form-group">
										<label>Staut de vol:</label>
										<input type="text" class="form-control" id="recipient-name" required="required"
											name="statut">
									</div>
								</div>
							</div>
							<div style="clear:both;"></div>
							<div class="modal-footer">
								<button name="save" class="btn btn-primary"><span
										class="glyphicon glyphicon-save"></span> Enregistrer</button>
								<button class="btn btn-danger" type="button" data-dismiss="modal"><span
										class="glyphicon glyphicon-remove"></span> Fermer</button>
							</div>
					</div>
					</form>
				</div>
			</div>
		</div>












	</div>




	<?php
include('script.php');
?>

	

</body>

</html>