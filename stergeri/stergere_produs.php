<html>
<body background = "3.jpeg">
<?php

include "conexiune.php";

$camp = $_GET["camp"];

//sterge produs
echo "Produsul cu id-ul $camp a fost sters";
$sql = "DELETE FROM produs WHERE id_produs = $camp"; 
$result = $mysqli->query($sql);

?>

<a href="listare_produse.php">Catre listarea produselor</a>
</html>