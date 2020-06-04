<header>
            <nav class="nav">
                  <span id="brand">
                        <a href="#">Your-Flight</a>
                  </span>

                        <?php if (isset($_SESSION['nom']) && isset($_SESSION['prenom']) && isset($_SESSION['statut'])) {?>
                  <ul id="menu">
                        <li><a href="index2.php">Accueil</a></li>
                        <li><a href="userinfo.php">Informations personnels</a></li>
                        <li><a href="user_reservation.php">Mes réservations</a></li>
                        <li><a href="#" id="nm">Bonjour: <?= $_SESSION["nom"]; ?> <?= $_SESSION["prenom"]; ?></a></li>
                        <li><a href="logout.php" id="nm">Log Out</a></li>
                  </ul>
                  <?php } else { ?>
                        <div id="menu">
                              <a href="login.php" style="text-decoration: none; color: #fff;">Login</a>
                        </div>

                        <?php }; ?>

            </nav>
        
        
</header>