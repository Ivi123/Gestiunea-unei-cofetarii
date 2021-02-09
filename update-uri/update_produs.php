<html>
<body background = "3.jpeg">
<?php

include "conexiune.php";

$idnou= $_GET["idnou"];
$denumire = $_GET["denumire"];
$pret= $_GET["pret"];

//update produs
echo " Produsul cu id-ul '$idnou' a fost modificat";
$sql = "UPDATE produs SET denumire = '$denumire', pret = '$pret' where id_produs = '$idnou'"; 
$result = $mysqli->query($sql);

?>
<br>
<a href="listare_produse.php">Catre listarea produselor</a>
</html>