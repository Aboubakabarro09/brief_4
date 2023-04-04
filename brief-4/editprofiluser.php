<?php 
include 'administrateur/serverAdmin.php';
session_start();

if (isset($_SESSION['id_user']) && !empty($_SESSION['id_user'])) {
    $getid = $_SESSION['id_user'];
    $mysql = $pdo->prepare('SELECT * FROM users WHERE id_user = ?');
    $mysql->execute(array($getid));

    if ($mysql->rowCount() > 0) {
        $data = $mysql->fetch();
        $nom = $data['nom'];
        $prenoms = $data['prenoms'];
        $mdp = $data['motDepasse'];
        $email = $data['email'];
        $country = $data['pays'];

        if (isset($_POST['envoi'])) {
            $name = $_POST['nom'];
            $Fname = $_POST['prenoms'];
            $mdp = $_POST['motDepasse'];
            $pays = $_POST['pays'];

            if (!empty($name) && !empty($Fname) && !empty($mdp)) {
                $update = $pdo->prepare('UPDATE users SET nom = ?, prenoms = ?, motDepasse = ?, pays=? WHERE id_user = ?');
                $update->execute(array($name, $Fname, $mdp,$pays, $getid));
                header('location:profilUser.php');
            } else {
                echo "Veuillez remplir tous les champs obligatoires";
            }
        }
    } else {
        echo "Aucune publication trouvée avec cet identifiant !";
    }
} else {
    echo "Aucun identifiant trouvé !";
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" /> 
  <title>modifier ses informations</title>
</head>
<body>
  <div class="container-fluid">

  <form method="POST" action=""  enctype="multipart/form-data">
  <div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form>
        <h1 class="text-center mb-3">Inscription</h1><br>
        <div class="form-group">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-user"></i></div>
            </div>
            <input type="text" class="form-control" name="nom" placeholder="Nom" value="<?=$nom;?>" required>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-user"></i></div>
            </div>
            <input type="text" class="form-control" name="prenoms" placeholder="Prénom" value="<?=$prenoms;?>" required>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-map"></i></div>
            </div>
            <input type="int" class="form-control" name="pays" placeholder="pays" value="<?=$country;?>" required>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-envelope"></i></div>
            </div>
            <input type="email" class="form-control" name="email" placeholder="Adresse email"  value="<?=$email;?>" disabled>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-key"></i></div>
            </div>
            <input type="password" class="form-control" name="motDepasse" placeholder="Mot de passe" value="<?=$mdp;?>">
          </div>
        </div>
        <button type="submit" name="envoi" class="btn btn-primary btn-block">Enregistrer</button>
      </form>
    </div>
  </div>
</div>
</form>
  </div>
</body>
</html>