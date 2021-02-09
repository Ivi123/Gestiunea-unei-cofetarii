<html>
<body background = "3.jpeg">
<?php

include "conexiune.php";

$upnumepren = $_GET["numpren"];
$upid= $_GET["idnou"];
$newtelefon = $_GET["ntel"];

//update client 
echo " Clientul cu id-ul '$upid' a fost modificat";
$sql = "UPDATE client SET nume = '$upnumepren', telefon = '$newtelefon' WHERE id_client = '$upid'"; 
$result = $mysqli->query($sql);

?>
<br>
<a href="listare_clienti.php">Catre listarea clientilor</a>
</html>