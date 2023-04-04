<?php 
session_start();
if(isset($_POST["submit"])){
  if(isset($_POST["username"]) and !empty($_POST['username'])){
    if(filter_var($_POST['username'], FILTER_VALIDATE_EMAIL)){
    if(isset($_POST["username"]) and !empty($_POST['username'])){

        require"serverAdmin.php";

        $mot_de_passe = sha1($_POST['mot_de_passe']);

        $getdata = $pdo -> prepare("SELECT email FROM admin WHERE email=? and mot_de_passe=?");
        $getdata -> execute(array($_POST['username'], $mot_de_passe));

        $rows = $getdata -> rowCount();
        if($rows==true){
            $_SESSION['admin']= $_POST['username'];
            header("location:dashboard.php");
        }else{
            $erreur = "mot de passe ou username inconnu";
        }

    }else{
        $erreur = "veuillez saisir un mot de passe valide!";
    }

    }else{
        $erreur = "veuillez saisir un email valide!";
    }
  }else{
    $erreur = "veuillez saisir un email valide";
  }

}
?>