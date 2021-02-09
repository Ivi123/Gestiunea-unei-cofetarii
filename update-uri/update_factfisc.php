<html>
<body background = "3.jpeg">
<?php

include "conexiune.php";

$idnou= $_GET["idnou"];
$codfiscal= $_GET["codfiscal"];
$data = $_GET["data"];


//update factura
echo " Factura fiscala cu id-ul '$idnou' a fost modificata";
$sql = "UPDATE `factura fiscala` SET cod_fiscal = '$codfiscal', data = '$data' WHERE id_factura = '$idnou'"; 
$result = $mysqli->query($sql);

?>
<br>
<a href="listare_factfisc.php">Catre listarea facturilor fiscale</a>
</html>