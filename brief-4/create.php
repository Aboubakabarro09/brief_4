<?php 
include('connect.php');

// sql to create table
$sql = "CREATE TABLE `publication` (
  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `titre` varchar(100) NOT NULL,
  `fonction` varchar(200) NOT NULL,
  `imagepub` varchar(255) NOT NULL,
  `texte` varchar(255) NOT NULL,
  `datepub` datetime(6) NOT NULL,
  `id_users` varchar(255)NOT NULL
)";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table publication created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();

?>