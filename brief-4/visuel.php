<?php
include('connect.php');
session_start();

if(!$_SESSION['loggedin']){
  header('location:index.php');
}

// $off= $_SESSION['id_user'] ;
// echo "connecte".$off;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>weLikeFood</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styless.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1,maximum-scale=1"/>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style type="text/css">

#connexion{    
    margin-left: 250px;
}
div.gallery {
  border: 1px solid rgb(39, 150, 39);
  padding: 25px 10px 10px 40px;
  width: 310px;
  height: 245px;
  border-radius: 40px;
  margin-left: 300px;

}


div.gallery img {
  width: 298px;
  height: 250px;  
}

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
        /*caroussel*/
.swiper {
  width: 100%;
  height:  20%;
}

  .swiper-slide {   
    font-size: 18px;
    background: #fff;
    border-radius: 50px;   
    border: 0.5px solid skyblue;
     width: 100px;
    height: 50px;
    margin-left: 10px;      
  }

/*fin caroussel*/

		.div_text_scroll {
			font-size: 15px;
			width: 100px;
			margin-left: 50px;
      margin-right: 30px;
      margin-top: -30px;
		}
		.img_scroll {
			width: 30px;
			height: 35px;
			border-radius: 50%;
      padding-top: 10px;
      margin-left: 5px;
		}

    #card-comment{
      margin-left: 20%;
      margin-right: 20%;
      margin-top: 10px;
    }
    #card-h{
      background-color: skyblue;
    }
    
.ron1 {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    border-color: rgb(40, 87, 168);
    background-color: rgb(16, 121, 241);
    color: white;
}

.ron2 {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    color: white;
    border: none;
    background-color: rgb(229, 33, 33);
}

.bloc1 {
    width: 500px;
    height: 300px;
    float: right;
    margin-top: -250px;
}
.para3{
  color: #596CE5;
}
	</style>
</head>
<body>
<header>
    <div style="display: flex;align-items: center;">
      &nbsp;&nbsp;&nbsp;<a href="accueil.php"><img width="100" height="100" src="images/Hari Dabali.png"></a>
       <input id="rech" type="text" name="rech">
       <img style="margin-left: -110px; padding-right: 5px;" src="images/micro.png" width="25" height="25">
       <img style="margin-left: 2px; padding-right: 5px;" src="images/camera.png" width="25" height="20">
       <img style="margin-left: 3px; padding-right: 5px;" src="images/loupe.png" width="25" height="20">
       <a href="deconnexion.php" id="connexion"><button>Déconnexion</button></a>
       &nbsp;<img style="margin-bottom: -5px;" src="images/parametre.png">
    </div><br>
  
    <!--div de la 2eme ligne-->
    <div style="display: flex;align-items: center;">
  
      <div style="display: flex;align-items: center;">
      <nav>
      <a id="tout" href="#">TOUT</a>
      <a id="actu" href="#">ACTUALITES</a>
      <a id="imag" href="#">IMAGES</a>
      <a id="videos" href="#">VIDEOS</a>
      <a id="cartes" href="#">CARTES</a>
      <div class="animation start-home"></div>
      </nav>
      </div>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <form method="POST" action="./verify.php">
      <div class="fil" style="display: flex;align-items: center;">
     Type de Publication: &nbsp;	 	 
     <select name="fonction" style="border-style: none;font-weight: bold;">
       <option selected>Choisir</option>
       <option>Restaurant</option>
       <option>Recette</option>
       <option>Retour d'exper</option>
       <option>conseil</option>
     </select>
     &nbsp;&nbsp;&nbsp;&nbsp;Filtre <img style="margin-bottom: -7px;" src="images/filtre.png">
       </div>
      </form>
    </div>

    <!--fin div de la 2eme ligne-->
  
    <!--trait de separation-->
     
     <div class="Trait">	 	
     </div>
  </header>

  <section id="premier" style="position: relative;">


    <div class="swiper mySwiper">
      <div class="swiper-wrapper">

    <?php
    $req = "SELECT * FROM publication ORDER BY id DESC";
    $result = mysqli_query($conn, $req);
    
    if(mysqli_num_rows($result) > 0){
     while($hari = mysqli_fetch_assoc($result)){
    ?>

    <div class="swiper-slide">
      <img class="img_scroll" src="<?=$hari['imagepub']?>" alt="image">
      <div class="div_text_scroll">
        <small><?=$hari['titre']?><br> <b><?=$hari['fonction']?></b></small>
      </div>
    </div>

    <?php
      }

      }
      ?> 
      </div>
      </div>
      
    

      <!-- les fleches -->
      <div class="swiper-button-next" style="height: 80px;width: 50px; position: absolute; color: black; background-color: transparent;font-weight: bold;margin-top: -45px;margin-right:0;"></div>
      <div class="swiper-button-prev" style="height: 80px;width: 50px; position: absolute; color: black; background-color: transparent;font-weight: bold;margin-top: -45px;"></div>
	  </section>
    
    <section id="deuxieme" style="width: 100%; padding-top: 20px;">
   <?php
    if(isset($_GET["id"])){
        $id= $_GET["id"];
    }
    $req ="SELECT * FROM `publication` WHERE id = $id";
    $result = mysqli_query($conn, $req);
    $har = mysqli_fetch_assoc($result);
    ?>

    <h2 style="margin-left: 500px;color: #008518"><?=$har['fonction']?></h2>
    
      <div>
      
      <div class="gallery">
        <a  href="#">
        <img style="width: 230px;height: 190px;position:relative;" src="<?=$har['imagepub']?>" alt="">
          <div class="contenant">
          </div>
        </a>
      </div>

      </div>
 </div>
   </section>

   <?php
        
        if(isset($_GET["id"])){
         
  
          $id= $_GET["id"];
            
          $sql = "SELECT * FROM `avis` WHERE publication_id = '$id' AND avis = '1'";
  
          $result = mysqli_query($conn, $sql);
          $count1 = mysqli_num_rows($result);

          $sql2 = "SELECT * FROM `avis` WHERE publication_id = '$id' AND avis = '0'";
  
          $result1 = mysqli_query($conn, $sql2);
          $count2 = mysqli_num_rows($result1);
          
        }
          ?>

  
   <div style="margin-left: 380px;margin-top: -20px;position: absolute;width: 170px;height:40px;background-color: white;paddinf-left: 30px;display:flex">
   
       <form method="POST">
           <input  type="number" name="avis"  value="1" class="ron1" hidden>
           <input  type="number" name="id"  value="<?php echo $_GET["id"]; ?>" hidden>
           <input type="submit" name="count1"  value="<?php echo $count1 ?>" class="ron1" disabled>
           <button type="submit" name="submit" style="background-color: white;border: none;">
           <i class="fa fa-thumbs-up like-btn" class="fa fa-thumbs-o-up like-btn" class="imj1" style="color: blue;"></i>
           </button>
        </form> 
           
        <form class="pouss" method="POST">
          <button style="background-color: white;border: none;">
          <i class="fa fa-thumbs-down dislike-btn" 
      		  class="fa fa-thumbs-o-down dislike-btn" style="color: red;" data-id=""></i>

          </button>
          <input  type="number" name="avis"  value="0" class="ron1" hidden>
          <input  type="number" name="id"  value="<?php echo $_GET["id"]; ?>" hidden>
          <input type="submit" name="count2" value="<?php echo $count2 ?>" class="ron2" disabled>
 
        </form>
        
   </div>


   <div class="bloc1">

   <?php
    $id= $_GET["id"];
    $req ="SELECT*FROM `publication` WHERE id = '$id'";
    $comment = mysqli_query($conn, $req);
    
    if(mysqli_num_rows($comment) > 0){
     while($hari = mysqli_fetch_assoc($comment)){
    ?>
    <h2 style="color:#3551EC;"><?=$har['titre']?></h2>
    <p class="para2" ><?=$hari['texte']?></p>
    <p class="para3">publié le <?=$hari['datepub']?></p>
    
    <?php
      }
      }
      // else{
      //   echo "0 results";
      //  } 
      mysqli_close($conn);

      ?>
    </div>

    <div>
      <?php include('essai.php') ?>
    </div>

  <!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 9,
    spaceBetween: 2,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    // pagination: {
    //   el: ".swiper-pagination",
    //   clickable: true,
    // },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });


  function ldike(id) {
    var count=jQuery('#like'+id).html();
    count++;
    jQuery('#like'+id).html(count);
  }

  $(document).ready(function() {
    $('form').submit(function(e) {
      e.preventDefault();
      const avis = $(this).find('input[name=avis]').val();
      const id = $(this).find('input[name=id]').val();
      const _this = this
      $.post("likeDislike.php", { id, avis }, function(res){
        const result = JSON.parse(res)
        if(result) {
          $(_this).find('input[name=count1]').val(result.like)
          $(_this).find('input[name=count2]').val(result.dislike)
        }
      });
    });
  }); 
</script>
</body>
</html>
