<html>
<body background = "3.jpeg">
<?php

include "conexiune.php";

$idnou= $_GET["idnou"];
$idc= $_GET["idc"];
$data = $_GET["data"];


//update 
echo " Comanda cu id-ul '$idnou' a fost modificata";
$sql = "UPDATE comanda SET id_client = '$idc', data = '$data' WHERE id_comanda = '$idnou'"; 
$result = $mysqli->query($sql);

?>
<br>
<a href="listare_comenzi.php">Catre listarea comenzilor</a>
</html>