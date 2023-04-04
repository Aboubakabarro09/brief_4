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
        $country = $data['pays'];

        if (isset($_POST['env'])) {
            $name = $_POST['nom'];
            $Fname = $_POST['prenoms'];
            $mdp = $_POST['motDepasse'];

            if (!empty($name) && !empty($Fname) && !empty($mdp) && !empty($pays)) {
                $update = $pdo->prepare('UPDATE users SET nom = ?, prenoms = ?, motDepasse = ?,WHERE id_user = ?');
                $update->execute(array($name, $Fname, $mdp, $getid));
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
