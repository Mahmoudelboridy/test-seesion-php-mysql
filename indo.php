<?php

session_start();

echo "welcome ".$_SESSION['name']; 
echo "<br>";
echo "u id ".$_SESSION['id']; 




?>

<a href="logout.php">logout</a>