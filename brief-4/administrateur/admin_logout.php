<?php
session_start();

// Efface toutes les variables de session
$_SESSION = array();

// Détruit toutes les données de la session
session_destroy();

// Envoie des entêtes pour empêcher la mise en cache de la page de déconnexion
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Redirige vers la page de connexion
header("Location: admin.php");
exit;
?>
