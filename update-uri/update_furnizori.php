<html>
<body background = "3.jpeg">
<?php

include "conexiune.php";

$codfiscal= $_GET["idnou"];
$denumire = $_GET["denumire"];
$telefon = $_GET["telefon"];


//update furnizor
echo " Furnizorul cu id-ul '$codfiscal' a fost modificata";
$sql = "UPDATE `furnizor` SET denumire = '$denumire', telefon = '$telefon' WHERE cod_fiscal = '$codfiscal'"; 
$result = $mysqli->query($sql);

?>
<br>
<a href="listare_furnizori.php">Catre listarea furnizorilor</a>
</html>