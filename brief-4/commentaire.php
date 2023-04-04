<?php
  include 'connect.php';
  // session_start();

  extract($_POST);

  $data="";

  foreach ($_POST as $key => $value) {
    if (empty($data)) {
      $data .="$key ='$value'";
    }else{
      $data .=",$key ='$value'";
    }
  }
    $sql= "INSERT INTO commentaire set $data";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo "données enregistré";
    }else{
      echo "non enregistré";
    }
     
      mysqli_close($conn);
?>

