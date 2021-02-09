<body background = "2.jpg">
<?php

include "conexiune.php";

$newnume = $_GET["numpren"];
$newtelefon = $_GET["ntel"];

//adaugare
echo "<h2> Datele noului client: $idnou, $newnume, $newtelefon </h2>";
$sql = "INSERT INTO client (id_client, nume, telefon) VALUES ('null', '$newnume', '$newtelefon')"; 
$result = $mysqli->query($sql);


?>
<br>
<a href="listare_clienti.php">Catre listarea clientilor</a>