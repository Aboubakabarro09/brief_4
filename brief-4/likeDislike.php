<?php
    session_start();
    include('connect.php'); 
    if(!$_SESSION['loggedin']){
   header('location:index.php');

} else {


    $off= $_SESSION['email']; 
    if(isset($_POST["id"]) && isset($_POST["avis"])){
        $id= $_POST["id"];
        $avis = $_POST["avis"];

        
        $sql = "INSERT INTO `avis`(`avis`, `date`, `publication_id`,`email_users`) VALUES ('$avis', NOW(), '$id', '$off')";

        // echo $sql;

        if(mysqli_query($conn, $sql)){
            $sql = "SELECT*FROM `avis` WHERE publication_id = '$id' AND avis = '1'";
  
            $result = mysqli_query($conn, $sql);
            $count1 = mysqli_num_rows($result);

            
          $sql2 = "SELECT * FROM `avis` WHERE publication_id = '$id' AND avis = '0'";
  
          $result1 = mysqli_query($conn, $sql2);
          $count2 = mysqli_num_rows($result1);
          echo json_encode([ "like" => $count1, "dislike" =>$count2]);
            
        }else{
            echo "error: ". $sql . "<br>" .mysqli_error($conn);
        }
        
    }
    }
?>