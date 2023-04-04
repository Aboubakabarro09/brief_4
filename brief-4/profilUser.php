<?php
include('connect.php');
session_start();
if(!$_SESSION['loggedin']){
  header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
	   <link rel="stylesheet" type="text/css" href="css/profil.css">
	<title>profil utilisateur</title>
	<style type="text/css">
		div.gallery {
  border: 1px solid #ccc;
  width: 270px;
  height: 245px;
  border-radius: 10px;

}

div.gallery:hover {
  box-shadow: 2px 2px 8px lightgray;
}

div.gallery img {
  width: 298px;
  height: 250px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  
}
.para{
  width: 270px;
  margin-top: -4px;
  font-size: 12px;
  margin-left: 10px;
}
.para1{
  margin-left: 10px;
  margin-top: -10px;
  font-size: 12px;
  width: 270px;
}
div.desc1{
  padding-left: 15px;
  text-align: center;
  width: 250px;
  height: 100px;
  background-color: blue;
}

	.contenant {
  height: 200px;
  width: 270px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  margin-top: -200px;
  position: absolute;
}
.contenant:hover {
  position: absolute;
  opacity: 1;
  box-shadow: inset 0 -60px 10px 4px rgba(0, 0, 0, 0.5);

}
 .contenant:hover .overlay {
  opacity: 1;
}
.contenant:hover .img_plus {
  opacity: 1;
}
/* texte dans image */
.overlay {
  
  margin-left: 10px;
  opacity: 0;
  transition: .5s ease;
  color: white;
  vertical-align: text-bottom;
  font-size: 11px;
  float: left;
  text-align: left;
  margin-top: 150px;

}

/* la petite image sur l'image */
.img_plus {
  
  opacity: 0;
  transition: .5s ease;  
  text-align: right;
  height:40px;
  width:40px;
 
}
/*.card-body{
	height: 1000em;
}*/

	</style>
</head>
<body>
	<div class="container-fluid">

		<nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed;top: 0;
  width: 100%; z-index: 1;">
  <a class="navbar-brand" href="accueil.php"><img width="110" height="80" src="images/Hari Dabali.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    	<li class="nav-item active">
        <a class="nav-link" href="profilUser.php">Profil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="accueil.php">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="deconnexion.php">Déconnexion</a>
      </li>	
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
			<br> <br> <br>
			<div class="row" style="margin-bottom:50px;">
				<div class="col-md-4 mt-1">
					<div class="card text-center sidebar">
						<div class="card-body">
							<img src="image/userC.png" class="rounded-circle" width="150">
							<div class="mt-3">
								<?php include('editUser.php'); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8 mt-1">
					<div class="cart mb-3 content">
						<h1 class="m-3">
							Publications Récentes
							<hr>
						</h1>
						<div class="col">
								<?php

									$idprofil = $_SESSION['id_user'];

									$sql = "SELECT * FROM publication WHERE id_users=$idprofil";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
										while($row = mysqli_fetch_assoc($result)) {
                ?>
						<div class="card-body">
                 				      <div style="display: inline-flex;justify-content: space-around;margin-left: 5px;margin-bottom:10px" >

      										<div class="gallery" class="boite" >
        										<a  href="visuel.php?id=<?=$row['id']?>">
        										<img style="width: 268px;height: 200px;position:relative;" src="<?=$row['imagepub']?>" alt="">
          										<div class="contenant">

          											<div class="overlay" >300 x 250 - jpg<br> maximumwall.com</div>
          											<img class="img_plus" style="height: 40px;width: 40px;float: right;" src="images/img_plus.png">
      
          										</div>
        										</a>
          											<p class="para"> <?=$row['texte'];?> </p>
          											<p class="para1"> <?=$row['datepub'];?> </p>
      										</div>
      										<ul>
      											<ol><a href="deletePost.php?id=<?= $row['id'];?>"><button type="button" class="btn btn-danger">supprimer</button></a></ol>
      											<br>
      											<ol><a href="updatePost.php?id=<?= $row['id'];?>"><button type="button" class="btn btn-primary">modifier </button></a></ol>
      										</ul>	
      										</div>
							</div>
							<?php
							}
								}
							mysqli_close($conn);
							?>
						</div>
					</div>
				</div>
			</div>
	</div>
</body>
</html>