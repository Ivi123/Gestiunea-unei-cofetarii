<html>
<body background = "3.jpeg">
<?php

include "conexiune.php";

$idnou= $_GET["idnou"];
$idprod= $_GET["idprod"];
$iding = $_GET["iding"];
$cantitate= $_GET["cantitate"];

//update istoric
echo " Inregistrarea cu id-ul '$idnou' a fost modificata";
$sql = "UPDATE reteta SET id_produs = '$idprod', id_ingredient = '$iding', cantitate = '$cantitate' WHERE id_reteta = '$idnou'"; 
$result = $mysqli->query($sql);

?>
<br>
<a href="listare_retete.php">Catre listarea retetelor</a>
</html>