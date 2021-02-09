<body background = "2.jpg">
<?php

include "conexiune.php";

$idprod= $_GET["idprod"];
$idcom= $_GET["idcom"];
$cantitate = $_GET["cantitate"];


//adaugare
echo "<h2> Datele noii descrieri : '$idprod', '$idcom', '$cantitate' </h2>";
$sql = "INSERT INTO `descriere comanda` (id_desc, id_produs, id_comanda, cantitate) VALUES ('null', '$idprod', '$idcom', '$cantitate')"; 
$result = $mysqli->query($sql);


?>
<br>
<a href="listare_descrieric.php">Catre listarea descrierilor comenzilor</a>