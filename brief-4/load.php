<?php 

include("administrateur/serverAdmin.php");

if (isset($_POST['id']) && !empty($_POST['id'])) {
    $roote = $_POST['id'];
} else {
    echo"identifiant non trouvé";
}

$sql = $pdo -> prepare("SELECT * FROM commentaire WHERE idPost=? ORDER BY idCom DESC");
$sql-> execute(array($roote));

if ($sql->rowCount()) {
  // output data of each row
  while($row = $sql->fetch()) {
  	?>
    <div class="col">
        <div class="card" id="card-comment">
            <div class="card-header" id="card-h">
                <p><?=$row['email_users'];?> &nbsp;<small>le 
                	<?=date('d/m/Y H:i:s', strtotime($row['date']));?></small></p>
            </div>
            <div class="card-body" id="card-b">
                <p><?=$row['texte'];?></p>
            </div>
        </div>
    </div>
  	<?php

  }
} else {
  echo "<small>pas de commentaire disponible</small>";
}

// $conn->close();

?>