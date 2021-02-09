<?php

include "conexiune.php";

$numtabela = $_GET["denumire"];

//afisare tabela dupa nume
echo "<h2> Afisare tabela: $numtabela </h2>";
$sql = "SELECT * FROM $numtabela";
$result = $mysqli->query($sql);

?>

<a href="index.php">Return to main page</a>