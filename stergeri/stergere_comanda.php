<html>
<body background = "3.jpeg">
<?php

include "conexiune.php";

$camp = $_GET["camp"];

echo "Comanda cu id-ul $camp a fost sters";
$sql = "DELETE FROM comanda WHERE id_comanda = $camp"; 
$result = $mysqli->query($sql);

?>

<a href="listare_comenzi.php">Catre listarea comenzilor</a>
</html>