<?php
include('connect.php');
session_start();
if(!$_SESSION['loggedin']){
  header('location:index.php');
}

// if ($_SESSION['id_user']) {
//   // echo "sucess";
//   // echo $_SESSION['id_user'];
// } else{
//   echo "error";
// }

      $show = 10;

    if(isset($_POST["add"])){

      $show= $_POST["add"];
      
    }

if (isset($_POST['fonction'])) {

  $fonction = $_POST['fonction'];

  $sql = "SELECT * FROM `publication` WHERE fonction = '$fonction' LIMIT $show";

  $result1 = mysqli_query($conn, $sql);
  $result2 = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result1) > 0 && mysqli_num_rows($result2) > 0) {
  $data1 = $result1;
  $data2 = $result2;
  }else {
    $req ="SELECT * FROM publication ORDER BY id DESC LIMIT $show";

    $result3 = mysqli_query($conn, $req);
    $result4 = mysqli_query($conn, $req);
    $data1 = $result3;
    $data2 = $result4;
  
  }

}else {
  $req ="SELECT * FROM publication ORDER BY id DESC LIMIT $show";

  $result5 = mysqli_query($conn, $req);
  $result6 = mysqli_query($conn, $req);
  $data1 = $result5;
  $data2 = $result6;
}

?>

<!DOCTYPE html>
<html>
<head>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>welikefood</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1,maximum-scale=1"/>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>  

	<style type="text/css">
    #connexion {
    margin-left: 150px;
    }

	  div.gallery {
/*      display: grid;*/
      border: 1px solid #ccc;
      width: 219px;
      height: 250px;
      border-radius: 10px;
      padding-bottom: 15px;
      box-sizing: border-box;
      word-wrap: break-word;
      text-align: center;
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

div.desc1{
  padding-left: 15px;
  text-align: center;
  width: 250px;
  height: 100px;
  background-color: blue;
}

	.contenant {
  height: 200px;
  width: 219px;
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
 
#commentaire {
	  background: #f2f2f2;
    border: 1px solid #999;
    bottom: 0;
    color: #36b;
    cursor: pointer;
    display: block;
    height: 28px;
    line-height: 28px;
    min-width: 110px;
    padding: 0 5px;
    position: fixed;
    right: 20px;
    text-align: center;
    z-index: 4;
    font-family:'Roboto',Helvetica,Sans-Serif;
    font-size: 13px;



}
/*caroussel*/
.swiper {
        width: 100%;
        height:  20%;
        margin-right: 20px;

      }

  .swiper-slide {
        
    font-size: 18px;
    background: #fff;
    border-radius: 50px;   
    border: 0.5px solid skyblue;
    width: 150px;
    height: 50px;
    margin-left: 10px;      
  }

/*fin caroussel*/

		.div_text_scroll {
			font-size: 12px;
			width: 150px;
			margin-left: 40px;
     
      margin-top: -30px;
		}
		.img_scroll {
			width: 30px;
			height: 35px;
			border-radius: 50%;
      padding-top: 10px;
      margin-left: 5px;
		}
	
		head {
			min-width: 1000px;
		}
		body {
			min-width: 1000px;
		}
/* w________________________________________________*/
            .menu {
            height: 60px;
            list-style: none;
            padding: 10px;
            margin: 40px;
        }
        
        .menu li {
            float: left;
            width: 200px;
        }
        
        .menu li a:link, .menu li a:visited {
            display: block;
            color: #FFF;
            background: #293245;
            padding: 6px 10px;
            border-right: 1px solid #FFF;
            text-align: center;
            text-decoration: none;
        }
        
        .menu li a:hover {background-color: #199BD2;}
        .menu li a:active {background-color: #808080;}
        
        .menu .sousmenu {
            list-style-type: none;
            display: none;
            padding: 0;
            margin: 0;
            position: absolute;
        }
        
        .menu .sousmenu li {
            float: none;
            margin: 0;
            padding: 0;
            border-top: 1px solid transparent;
            border-right: 1px solid transparent;
        }
        
        .menu .sousmenu li a:link, .menu li a:visited {
            display: block;
            color: #FFF;
            text-decoration: none;
            background-color: #808080;
        }
        
        .menu .sousmenu li a:hover {
            background-color: #199BD2;
        }
        
        .menu li:hover .sousmenu {
            display: block;
        }
		</style>

</head>
<body>
	&nbsp;
  <div class="container-fluid">
    <header>
    <div style="display: flex; align-items: center;">
      &nbsp;&nbsp;&nbsp;<img width="110" height="110" src="images/Hari Dabali.png">
      <form method="POST" action="">
        <input id="rech" type="search" name="rech" autocomplete="">
      </form>
       <img style="margin-left: -110px; padding-right: 5px;" src="images/micro.png" width="25" height="25">
       <img style="margin-left: 2px; padding-right: 5px;" src="images/camera.png" width="25" height="20">
       <img style="margin-left: 3px; padding-right: 5px;" src="images/loupe.png" width="25" height="20">
       <a href="publication.php"><button id="connexion" style="text-decoration: none; border: 1px solid gray; border-radius: 5px;">publier</button></a>
       <!-- &nbsp;<img style="margin-bottom: -5px;" src="images/parametre.png"> -->
          <ul class="menu">
          <li><a href="#"><img src="images/parametre.png"></a>
            <ul class="sousmenu">
              <li><a href="profilUser.php">profil</a></li>
              <li><a href="accueil.php">accueil</a></li>
              <li><a href="deconnexion.php">deconnexion</a></li>
            </ul>
          </li>
    </div><br>
  
    <!--div de la 2eme ligne-->
    <div style="display: flex;align-items: center;">
  
      <div style="display: flex;align-items: center;">
      <nav class="nav-item">
      <a id="tout" href="#">TOUT</a>
      <a id="actu" href="#">ACTUALITES</a>
      <a id="imag" href="#">IMAGES</a>
      <a id="videos" href="#">VIDEOS</a>
      <a id="cartes" href="#">CARTES</a>
      <div class="animation start-home"></div>
      </nav>
      </div>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      <form method="POST" action="">
        <div class="fil" style="display: flex;align-items:center;">
          Type de Publication: &nbsp;    
          <select name="fonction" style="border-style:none; font-weight:bold;">
            <option selected value="">Choisir</option>
            <option value="Restaurant">Restaurant</option>
            <option value="Recette">Recette</option>
            <option value="Experience" >Retourd'Experience</option>
            <option value="Conseil">Conseil</option>
          </select>
          <button type="submit">Filtre <img  class="imj9" src="images/filtre.png"></button>
        </div>
      </form>
        <!-- <a href="publication.php"><button style="text-decoration: none; border: 1px solid gray;">publier</button></a> -->
    </div>
  
    <!--trait de separation-->
     
     <div class="Trait">    
     </div>
  </header>
 
  <section id="premier"  style="position: relative;">


    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

          <?php
              while($hari = mysqli_fetch_assoc($data1)){
          ?>

          <div class="swiper-slide">
              <img class="img_scroll" src="<?=$hari['imagepub']?>" alt="image">
          <div class="div_text_scroll"><small><?=$hari['titre']?></small><br> <b><?=$hari['fonction']?></b></div>
      
          </div>
        <!--fin 3eme scroll-->
        <?php
              } 
        ?>
    </div>
  </div>
       
      <!-- les fleches -->
      <div class="swiper-button-next" style="height: 80px;width: 50px; position: absolute; color: black; background-color: transparent;font-weight: bold;margin-top: -50px;">
      </div>
      <div class="swiper-button-prev" style="height: 80px;width: 50px; position: absolute; color: black; background-color: transparent;font-weight: bold;margin-top: -50px;">
      </div>

      </section>

   <!--galerie image-->
   <section id="deuxieme" style="width: 100%;padding-top: 20px; padding-right: 30px;">
    <!-- <div id="searchresult"></div> -->
    <div class="container" id="searchresult">
   <?php
    while($har = mysqli_fetch_assoc($data2)){
    ?>

      <div style="display: inline-flex;justify-content: space-around;margin-left: 5px;margin-bottom:10px" >

      <div class="gallery" class="boite" >
        <a  href="visuel.php?id=<?=$har['id']?>">
        <img style="width: 219px;height: 200px;position:relative;" src="<?=$har['imagepub']?>" alt="">
          <div class="contenant">

          <div class="overlay" >300 x 250 - jpg<br> maximumwall.com</div>
          <img class="img_plus" style="height: 40px;width: 40px;float: right;" src="images/img_plus.png">
      
          </div>
        </a>
        <div class="card-body" style="font-size: 12px; margin-left: 10px;">
         <?=$har['texte']?> <br style="height: 1px;"><?=$har['datepub']?> 
        </div>
      </div>

      </div>
      <?php
      
      }
      
       mysqli_close($conn);
      ?>

</div> 
   </section>

<!--commentaire-->
<div class="commentaire" id="commentaire">
<a style="margin-top: 5px;" href="#">
  <img style="float: left;border: 0;
    height: 14px;
    margin: 0 5px -4px 0;
    width: 14px;
    display: inline;
    margin-top: 8px;
    " src="images/commentaire.jpg">
<div >commentaire</div>
</a>
</div>

<!--fin commentaire-->
<?php
      
  $nbre2 = mysqli_num_rows($data1) + 10;
  // echo $nbre2;
  
?>

 <?php 
 // echo "vous êtes connecté:" . $_SESSION['email']; 
 ?> 
 
<form action="" method="post">
  <input type="number" name="add" value="<?php echo $nbre2 ?>" hidden>
<button class="btn1" type="submit">Voir plus...</button>
</form>
 
</div>
  <!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script defer>
  $(document).ready(function () {
    $("#rech").keyup(function() {
      var input = $(this).val();
      // alert(input);
      if(input != ""){
        $.ajax({
          url:"livesearch.php",
          method:"POST",
          data:{input:input},

          success:function(data){
            $("#searchresult").html(data);
            $("#searchresult").css("display", "block");
          }
        });
      }else{
        $("#searchresult").css("display", "none");
      }
    });
  });

    var swiper = new Swiper(".mySwiper", {
    slidesPerView: 9,
    spaceBetween: 2,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

</script>

</body>
</html>
