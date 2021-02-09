<html>
<body background = "3.jpeg">
<?php

include "conexiune.php";

$camp = $_GET["camp"];

echo "Detaliul cu id-ul $camp a fost sters";
$sql = "DELETE FROM `detaliu factura` WHERE id_detfact = $camp"; 
$result = $mysqli->query($sql);

?>

<a href="listare_detfact.php">Catre listarea detaliilor facturilor</a>
</html>