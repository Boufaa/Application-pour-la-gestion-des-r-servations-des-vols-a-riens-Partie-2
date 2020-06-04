<?php
include('../model/usersclass.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php
include('heder.php');
?>

<body>

                <nav class="nav">
                

                    <ul id="menu">
                        <li><a href="admin.php">List des vols</a></li>
                        <li><a href="admin_profile.php">Profile</a></li>
                        <li><a>Bonjour: <?= $_SESSION["nom"]; ?> <?= $_SESSION["prenom"]; ?></a></li>
                        <li><a href="logout.php" id="nm">Log Out</a></li>
                    </ul>
                 
                </nav>
                

            <?php
        $id = $_SESSION["id_user"];
        $user = new User();
        $res = $user -> user_show($id);
        $row = $res->fetch_assoc();
     
      ?>

      <br><br><br><br>
            

                            <div class="allinput">
                              <form method="POST" action="../controller/admin_back.php">
                           
                                <h1>MODIFICATION INFORMATIONS PROFILE ADMIN</h1>
                                <input name="id" value="<?= $row['id_user']; ?>" type="hidden">
                                <input name="nom" id="username" value="<?= $row['nom']; ?>" class="ipt" type="text">
                                <input name="prenom" id="name" type="text" value="<?= $row['prenom']; ?>" class="ipt">
                                <input name="mail" id="email" type="EMAIL" value="<?= $row['email']; ?>" class="ipt">
                                <input name="password" id="text" type="password" value="<?= $row['password']; ?>" class="ipt">
                                <input name="update_admin_info" type="submit" value="Modifier Profile" id="btn"> 
                              </form>  
                            </div>
</body>

</html>
