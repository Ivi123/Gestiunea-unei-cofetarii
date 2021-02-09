<html>
<body background = "3.jpeg">
<?php

include "conexiune.php";

$camp = $_GET["camp"];

echo "Descrierea cu id-ul $camp a fost stearsa";
$sql = "DELETE FROM `descriere comanda` WHERE id_desc = $camp"; 
$result = $mysqli->query($sql);

?>

<a href="listare_descrieric.php">Catre listarea descrierilor comenzilor</a>
</html>