<html>
<body background = "3.jpeg">
<?php

include "conexiune.php";

$camp = $_GET["camp"];

//sterge istoric
echo "Istoricul cu id-ul $camp a fost sters";
$sql = "DELETE FROM istoric WHERE id_istoric = $camp"; 
$result = $mysqli->query($sql);

?>

<a href="listare_istoric.php">Catre listarea istoricului</a>
</html>