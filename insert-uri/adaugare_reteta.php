<body background = "2.jpg">
<?php

include "conexiune.php";

$idprod= $_GET["idprod"];
$iding = $_GET["iding"];
$cantitate= $_GET["cantitate"];

//adaugare
echo "<h2> Datele noii inregistrari: '$idprod', '$iding, '$cantitate'</h2>";
$sql = "INSERT INTO reteta (id_reteta, id_produs, id_ingredient, cantitate) VALUES ('null', '$idprod', '$iding', '$cantitate')"; 
$result = $mysqli->query($sql);


?>
<br>
<a href="listare_retete.php">Catre listarea retetelor</a>