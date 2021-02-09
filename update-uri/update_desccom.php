<html>
<body background = "3.jpeg">
<?php

include "conexiune.php";

$idnou= $_GET["idnou"];
$idprod= $_GET["idprod"];
$idcom= $_GET["idcom"];
$cantitate = $_GET["cantitate"];


//update 
echo " Descrierea facturii cu id-ul '$idnou' a fost modificata";
$sql = "UPDATE `descriere comanda` SET id_produs = '$idprod', id_comanda = '$idcom', cantitate = '$cantitate' WHERE id_desc = '$idnou'"; 
$result = $mysqli->query($sql);

?>
<br>
<a href="listare_descrieric.php">Catre listarea descrierilor comenzilor /a>
</html>