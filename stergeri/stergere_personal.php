<html>
<body background = "3.jpeg">
<?php

include "conexiune.php";

$camp = $_GET["camp"];

//sterge client 
echo "Agajatul cu id-ul $camp a fost sters";
$sql = "DELETE FROM personal WHERE id_personal = $camp"; 
$result = $mysqli->query($sql);

?>

<a href="listare_personal.php">Catre listarea personalului</a>
</html>