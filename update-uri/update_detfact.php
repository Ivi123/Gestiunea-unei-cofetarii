<html>
<body background = "3.jpeg">
<?php

include "conexiune.php";

$idnou = $_GET["idnou"];
$iding = $_GET["iding"];
$idfact = $_GET["idfact"];
$pret = $_GET["pret"];
$cantitate= $_GET["cantitate"];

//update istoric
echo " Detaliul cu id-ul '$idnou' a fost modificat";
$sql = "UPDATE `detaliu factura` SET id_factura = '$idfact', id_ingredient = '$iding', pret = '$pret', cantitate = '$cantitate' WHERE id_detfact = '$idnou'"; 
$result = $mysqli->query($sql);

?>
<br>
<a href="listare_detfact.php">Catre listarea detaliilor facturilor</a>
</html>