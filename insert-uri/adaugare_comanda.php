<body background = "2.jpg">
<?php

include "conexiune.php";

$idc= $_GET["idc"];
$data = $_GET["data"];


//adaugare
echo "<h2> Datele noii comenzi: '$idc', '$data </h2>";
$sql = "INSERT INTO comanda (id_comanda, id_client, data) VALUES ('null', '$idc', '$data')"; 
$result = $mysqli->query($sql);


?>
<br>
<a href="listare_comenzi.php">Catre listarea comenzilor</a>