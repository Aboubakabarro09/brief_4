<?php

include 'connect.php';

//On récupère les valeurs entrées par l'utilisateur :
$nom=$_POST["nom"]; 
$prenoms=$_POST["prenoms"];
$pays=$_POST["pays"]; 
$email=$_POST["email"];
$motDepasse=$_POST["motDepasse"];


$sql = "INSERT INTO `users` (nom, prenoms, pays, email, motDepasse)
VALUES ('$nom', '$prenoms', '$pays', '$email', '$motDepasse')";

if (mysqli_query($conn, $sql)) {
  session_start();
  $_SESSION['loggedin'] = true;
  $_SESSION['id_user'] = $barro['id_user'];
  $_SESSION['email'] = $barro['email'];
  header('location:accueil.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>