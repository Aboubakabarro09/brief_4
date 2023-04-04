<?php 
session_start();
include('serverAdmin.php');
if (isset($_GET['id']) AND !empty($_GET['id'])) {
  $getid = $_GET['id'];
  $recupUser = $pdo->prepare('SELECT * FROM users WHERE id_user= ?');
  $recupUser->execute(array($getid));
  if ($recupUser->rowCount()>0) {
  $recupUser = $pdo->prepare('DELETE FROM users WHERE id_user= ?');
  $recupUser->execute(array($getid));
  }else{
    echo"Aucun utilisateur n'a été trouvé!";
  }
} else{
  echo "identifiant pas trouvé... :(";
}

?>