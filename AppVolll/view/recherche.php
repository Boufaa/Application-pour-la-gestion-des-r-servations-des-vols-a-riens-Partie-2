<?php
include('../model/volsclass.php');
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

	<div class="container text-center">
		<form method="post" action="recherche">
			<h1>Resultats des recherches</h1>

	</div>
	<div id="booking" class="container">
		<div class="row">
			<div class="col-12">
				<?php
				$villedepart = $_POST['villedepart'];
				$villearrivee = $_POST['villearrivee'];

				$vol = new Vol();
   				$res = $vol -> vol_show($villedepart,$villearrivee);
   				
				?>

				<tr>
					<?php
							$row_cnt = $res->num_rows; 
							if($row_cnt <= 0)
							echo " Aucun résultat trouvé";							
							else{
								



				echo "<div class='container'>
                          <div class='pricing-table table1'>
                            <div class='pricing-header'>
                              <div class='price'><img src='../public/img/plane.png'></div>";
                              	while ($row = $res->fetch_assoc()) { ?>
                              <div class='title'><strong>Vol Numéro:  </strong><span><?= $row['id']; ?></span></div>
                              </div>
                              <ul class='pricing-list'>
                              <li><strong>Date départ: </strong><?= $row['date_depart']; ?></li>
                                <li><strong>Lieu Départ: </strong><?= $row['depart']; ?></li>
                                <div class='border'></div>
                                <li><strong>Lieu Arrive: </strong><?= $row['destination']; ?></li>
                                
                                <div class='border'></div>
                                <li><strong>Numéro des Places Disponible: </strong><?= $row['num_place']; ?></li>
                                <div class='border'></div>
                              </ul>
								<a href="reservation.php?id=<?= $row['id']; ?>">Reserver</i></a><br>
                            <?php }} ?>
                          </div>
                            
                        </div>



			</div>
		</div>
	</div>

	<?php
	include('script.php');
	?>

</body>

</html>