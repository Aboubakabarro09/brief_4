<?php 	
include 'connect.php';

if(isset($_POST['input'])){
	$input = htmlspecialchars($_POST['input']);

	$query = "SELECT * FROM publication WHERE titre LIKE '{$input}%'";
	$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result) > 0){
    while($barro = mysqli_fetch_assoc($result)){
    	
    ?>

		<div style="display: inline-flex;justify-content: space-around;margin-left: 5px;margin-bottom:10px" >

      <div class="gallery" class="boite" >
        <a  href="visuel.php?id=<?=$barro['id']?>">
        <img style="width: 268px;height: 200px;position:relative;" src="<?=$barro['imagepub']?>" alt="">
          <div class="contenant">

          <div class="overlay" >300 x 250 - jpg<br> maximumwall.com</div>
          <img class="img_plus" style="height: 40px;width: 40px;float: right;" src="images/img_plus.png">
      
          </div>
        </a>
          <p class="para"> <?=$barro['texte']?> </p>
          <p class="para1"> <?=$barro['datepub']?> </p>
      </div>

      </div>

	<?php
		}

	}else{
		echo "<h6 class='text-danger text-center mt-3'> recherche non trouvé!</h6>";
	}
}

?>