<?php 
session_start();
if(!$_SESSION['admin']){
  header('location:admin.php');
}
include('serverAdmin.php');
echo "bonjour, ". $_SESSION['admin']; 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="fonts/material-icon/css1/material-design-iconic-font.min.css">
    <!-- Ajout de la feuille de style CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Ajout de la police de caractères Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  </head>
      <body>
    <link rel="stylesheet" href="style.css" />
    <title>dashboard</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light" class="tete">
        <a class="navbar-brand" href="accueil.php"><img width="110" height="80" src="../images/Hari Dabali.png"></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#about">A propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_logout.php">Déconnexion</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
<div class="container">
<!-- 	<div class="card">
	</div> -->
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#numero</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">email</th>
      <th scope="col">date de creation</th>
    </tr>
       <?php $rec = $pdo -> query('SELECT * FROM users');
      while($user = $rec -> fetch()){
      ?>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?= $user['id_user'] ?></th>
      <td><?= $user['nom'] ?></td>
      <td><?= $user['prenoms'] ?></td>
      <td><?= $user['email'] ?></td>
      <td><?= $user['pays'] ?></td>
      <td><a href="delete.php?id=<?= $user['id_user'];?>"><button type="button" class="btn btn-danger">supprimer</button></a></td>
    </tr>
    <?php 
    } 
    ?>
  </tbody>
</table>
</div>
</body>
</html>
