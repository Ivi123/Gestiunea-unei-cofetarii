<html>
<body background = "3.jpeg">
<?php

include "conexiune.php";

$camp = $_GET["camp"];

echo "Inregistrarea cu id-ul $camp a fost sters";
$sql = "DELETE FROM reteta WHERE id_reteta = $camp"; 
$result = $mysqli->query($sql);

?>

<a href="listare_retete.php">Catre listarea retetelor</a>
</html>