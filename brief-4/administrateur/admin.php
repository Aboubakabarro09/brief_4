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
          </ul>
        </div>
      </nav>
    </header>

    <div class="container">
        <div class="row justify-content-center">
          <div class="card text-center sidebar" style="border-style: ridge; border-radius: 20px; display: flex; flex-direction: column; text-align: center; justify-content: center;">
          <div class="col-lg-12 text-center">
            <h2>dashboard admin</h2>
            <hr/>
            <fieldset>
              <?php include_once "admin_login.php"?>
              <?php if(isset($erreur)){ echo $erreur;}?>
              <form action="" method="post">
                <label>nom:</label>
                <input type="email" name="username" placeholder="email" class="form-control">
                <br>
                <label>mot de passe :</label>
                <input type="password" name="mot_de_passe" placeholder="mot de passe" class="form-control">
                <br>
                <input type="submit" name="submit" class="btn btn-success">
              </form>
            </fieldset>
          </div>
        </div>
        </div>
    </div>
</body>
</html>