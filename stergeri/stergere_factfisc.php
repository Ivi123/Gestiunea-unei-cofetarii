<html>
<body background = "3.jpeg">
<?php

include "conexiune.php";

$camp = $_GET["camp"];

echo "Factura fiscala cu id-ul $camp a fost sters";
$sql = "DELETE FROM `factura fiscala` WHERE id_factura = $camp"; 
$result = $mysqli->query($sql);

?>

<a href="listare_factfisc.php">Catre listarea facturilor fiscale</a>
</html>