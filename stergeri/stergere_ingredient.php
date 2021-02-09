<html>
<body background = "3.jpeg">
<?php

include "conexiune.php";

$camp = $_GET["camp"];

echo "Ingredientul cu id-ul $camp a fost sters";
$sql = "DELETE FROM ingredient WHERE id_ingredient = $camp"; 
$result = $mysqli->query($sql);

?>

<a href="listare_ingrediente.php">Catre listarea ingredientelor</a>
</html>