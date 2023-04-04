<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inscription</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

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
      <li class="nav-item active">
        <a class="nav-link" href="index.php">revenir à la page de connexion<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

  <form method="POST" action="inscriptionUpload.php"  enctype="multipart/form-data">
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
            <input type="text" class="form-control" name="nom" placeholder="Nom" required>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-user"></i></div>
            </div>
            <input type="text" class="form-control" name="prenoms" placeholder="Prénom" required>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-map"></i></div>
            </div>
            <input type="int" class="form-control" name="pays" placeholder="pays" required>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-envelope"></i></div>
            </div>
            <input type="email" class="form-control" name="email" placeholder="Adresse email"  required>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-key"></i></div>
            </div>
            <input type="password" class="form-control" name="motDepasse" placeholder="Mot de passe" required>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
      </form>
    </div>
  </div>
</div>
</form>
  </div>

</body>
</html>