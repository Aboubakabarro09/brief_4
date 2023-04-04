<?php

include 'connect.php';

session_start();

// Traitement du formulaire de connexion
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $motDepasse = $_POST['motDepasse'];
    
    // Requête pour vérifier les informations d'identification
    $sql = "SELECT * FROM users WHERE email='$email' AND motDepasse='$motDepasse'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    while ($barro = mysqli_fetch_assoc($result)) {
       // Si les informations d'identification sont correctes
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['id_user'] = $barro['id_user'];
        $_SESSION['email'] = $barro['email'];
        header("location: accueil.php");
    }   
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Connectez-vous</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
</head>
<body>

	<div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="accueil.php"><img width="110" height="80" src="images/Hari Dabali.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link disabled">We Like food</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"><b>Bonjour Bienvenue sur votre pateforme</b></a>
      </li>
    </ul>
  </div>
</nav>
    <br>  <br>  <br>
  <div class="row justify-content-center">
      <div class="card text-center sidebar" style="border-style: ridge; border-radius: 20px; display: flex; flex-direction: column; text-align: center; justify-content: center;">
      <h2 class="card-header text-center">Connectez-vous Ici...</h2><br> 
        <form method="POST" action="" align="center">
        <div class="form-group">
          <label for="email">Identifiant :</label>
          <input type="email" class="form-control" name="email" id="email">
        </div>

        <div class="form-group">
          <label for="pwd">Mot de passe :</label>
          <input type="password" class="form-control" name="motDepasse" id="pwd">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Connexion</button>
        <a href="inscription.php"><button type="button" name="inscription.php" class="btn btn-success">Inscription</button></a>
      </form>
      </div> 
  </div>
</div>

</body>
</html>