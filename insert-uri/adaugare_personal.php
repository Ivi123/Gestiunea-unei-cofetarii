<body background = "2.jpg">
<?php

include "conexiune.php";

$idnou= $_GET["idnou"];
$nume = $_GET["nume"];
$prenume= $_GET["prenume"];
$meserie = $_GET["meserie"];
$adresa = $_GET["adresa"];
$telefon = $_GET["ntel"];

//adaugare
echo "<h2> Datele noului angajat: '$nume', '$prenume', '$meserie', '$adresa', '$telefon'</h2>";
$sql = "INSERT INTO personal (id_personal, nume, prenume, meserie, adresa, telefon) VALUES ('null', '$nume', '$prenume', '$meserie', '$adresa', '$telefon')"; 
$result = $mysqli->query($sql);


?>
<br>
<a href="listare_personal.php">Catre listarea personalului</a>