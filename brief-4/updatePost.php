<?php 
include('administrateur/serverAdmin.php');
if (isset($_GET['id']) AND !empty($_GET['id'])){
	$getid = $_GET['id'];
	$recup = $pdo->prepare('SELECT * FROM publication WHERE id=?');
	$recup->execute(array($getid));
	if ($recup->rowCount() > 0){
		$data = $recup->fetch();
		$titre = $data['titre'];
		$fonction = $data['fonction'];
		$imagePub = $data['imagepub'];
		$texte = $data['texte'];

        if (isset($_POST['submit'])){
            $titre = $_POST['titre'];
            $fonction = $_POST['fonction'];
            $texte = $_POST['texte'];

            // Vérification que les champs obligatoires ne sont pas vides
            if (!empty($titre) && !empty($fonction) && !empty($texte)){
                $update = $pdo->prepare('UPDATE publication SET titre=?, fonction=?, texte=? WHERE id=?');
                $update->execute(array($titre, $fonction, $texte, $getid));
                header('location: profilUser.php');
            } else {
                echo "Veuillez remplir tous les champs obligatoires";
            }
        }

	} else {
		echo "Aucune publication trouvée avec cet identifiant!";
	}
} else {
	echo "Aucun identifiant trouvé!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modification</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css1/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css1/style.css">
</head>
<body>
<div class="main">
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <form method="POST" id="signup-form" class="signup-form" action=""  enctype="multipart/form-data">
                    <h2 class="form-title">JE PUBLIE</h2>
                    <div class="form-group">
                        <label for="titre">Titre de la publication</label>
                        <input type="text" class="form-input" name="titre" value='<?=$titre; ?>' id="titre"/>
                    </div>
                    <div class="form-group">
                        <label for="fonction">Type de la publication</label>
                        <select name="fonction" id="fonction">
                            <option value="">Faire un choix</option>
                            <option value="Restaurant" <?php if($fonction == 'Restaurant') echo 'selected'; ?>>Restaurant</option>
                            <option value="Recette" <?php if($fonction == 'Recette') echo 'selected'; ?>>Recette</option>
                            <option value="Experience" <?php if($fonction == 'Experience') echo 'selected'; ?>>Retour d'Expérience</option>
                            <option value="Conseil" <?php if($fonction == 'Conseil') echo 'selected'; ?>>Conseil</option>
                        </select>
                    </div>
                     <div class="form-group">
                        <label for="photo">Image</label>
                        <input class="form-input" type="file" name="imagepub"/>
                    </div>
                    <div class="form-group">
                        <label for="texte">Message</label>
                        <textarea name="texte" id="" cols="58" rows="8"><?=$texte; ?></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-submit" value="Enregistrer les modifications"/>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>





