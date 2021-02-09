<body background = "2.jpg">
<?php

include "conexiune.php";

$denumire = $_GET["denumire"];
$telefon = $_GET["telefon"];


//adaugare
echo "<h2> Datele noului furnizor: '$denumire', '$telefon </h2>";
$sql = "INSERT INTO `furnizor` (cod_fiscal, denumire, telefon) VALUES ('null', '$denumire', '$telefon')"; 
$result = $mysqli->query($sql);


?>
<br>
<a href="listare_furnizori.php">Catre listarea furnizorilor</a>