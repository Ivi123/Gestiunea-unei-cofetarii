<body background = "2.jpg">
<?php

include "conexiune.php";

$codfiscal= $_GET["codfiscal"];
$data = $_GET["data"];


//adaugare
echo "<h2> Datele noii facturi fiscale: '$codfiscal', '$data </h2>";
$sql = "INSERT INTO `factura fiscala` (id_factura, cod_fiscal, data) VALUES ('null', '$codfiscal', '$data')"; 
$result = $mysqli->query($sql);


?>
<br>
<a href="listare_factfisc.php">Catre listarea facturilor fiscale</a>