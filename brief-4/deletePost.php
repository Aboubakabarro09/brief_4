<?php
include ('administrateur/serverAdmin.php');
if (isset($_GET['id']) AND !empty($_GET['id'])){
	$getid = $_GET['id'];
	$rec = $pdo->prepare('SELECT * FROM publication WHERE id=?');
	$rec ->execute(array($getid));
	if ($rec -> rowCount() > 0) {
		$deletePost = $pdo->prepare('DELETE FROM publication WHERE id=?');
		$deletePost ->execute(array($getid));
		header('location: profilUser.php');
	}else{
		echo "Aucun article n'a été trouvé!";
		}
}else{
	echo "Aucun identifiant trouvé!";
}
 ?>