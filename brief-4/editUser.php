<?php 

include('connect.php');

  $idprofil = $_SESSION['id_user'];

  $mysql ="SELECT * FROM users WHERE id_user=$idprofil";
  $check = mysqli_query($conn, $mysql);

  if(mysqli_num_rows($check) > 0){
    while ($userInfo = mysqli_fetch_assoc($check)) {
      ?>
      <div class="m-3 pt-3">
      <h2><?=$userInfo['nom'] ."&nbsp;". $userInfo['prenoms']?></h2>
      </div>
      <h5><?=$userInfo['email']?></h5>
      <h5><?=$userInfo['pays']?></h5>
      <a href="editprofiluser.php?id=<?= $_SESSION['id_user'];?>"><div class="btn btn-success">modifier vos information</div></a>
       <!-- <h5><a href="deconnexion.php" class="text-danger">Déconnexion</a></h5> -->

      <?php
    }
  }

?>
