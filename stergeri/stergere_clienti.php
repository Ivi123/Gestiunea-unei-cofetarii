<html>
<body background = "3.jpeg">
<?php

include "conexiune.php";

$camp = $_GET["camp"];

//sterge client 
echo "Clientul cu id-ul $camp a fost sters";
$sql = "DELETE FROM client WHERE id_client = $camp"; 
$result = $mysqli->query($sql);

?>

<a href="listare_clienti.php">Catre listarea clientilor</a>
</html>