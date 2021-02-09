<body background = "2.jpg">
<?php

include "conexiune.php";

$iding = $_GET["iding"];
$idfact = $_GET["idfact"];
$pret = $_GET["pret"];
$cantitate= $_GET["cantitate"];;

//adaugare
echo "<h2> Datele noii inregistrari:  '$iding, '$idfact', '$pret','$cantitate'</h2>";
$sql = "INSERT INTO `detaliu factura` (id_detfact, id_ingredient, id_factura, pret, cantitate) VALUES ('null', '$iding', '$idfact', '$pret', '$cantitate')"; 
$result = $mysqli->query($sql);


?>
<br>
<a href="listare_detfact.php">Catre listarea detaliilor facturilor</a>