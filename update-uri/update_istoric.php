<html>
<body background = "3.jpeg">
<?php

include "conexiune.php";

$idnou= $_GET["idnou"];
$idper = $_GET["idper"];
$idprod= $_GET["idprod"];
$data = $_GET["data"];

//update istoric
echo " Istoricul cu id-ul '$idnou' a fost modificat";
$sql = "UPDATE istoric SET id_personal = '$idper', id_produs = '$idprod', data = '$data' WHERE id_istoric = '$idnou'"; 
$result = $mysqli->query($sql);

?>
<br>
<a href="listare_istoric.php">Catre listarea istoricului</a>
</html>