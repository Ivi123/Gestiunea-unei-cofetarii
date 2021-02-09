<html>
<body background = "3.jpeg">
<?php

include "conexiune.php";

$idnou= $_GET["idnou"];
$nume = $_GET["nume"];
$prenume= $_GET["prenume"];
$meserie = $_GET["meserie"];
$adresa = $_GET["adresa"];
$telefon = $_GET["ntel"];

//update angajat
echo " Angajatul cu id-ul '$idnou' a fost modificat";
$sql = "UPDATE personal SET nume = '$nume', prenume = '$prenume', meserie = '$meserie', adresa = '$adresa', telefon = '$telefon' WHERE id_personal = '$idnou'"; 
$result = $mysqli->query($sql);

?>
<br>
<a href="listare_personal.php">Catre listarea personalului</a>
</html>