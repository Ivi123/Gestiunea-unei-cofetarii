<html>
<body background = "3.jpeg">
<?php

include "conexiune.php";

$idnou= $_GET["idnou"];
$denumire= $_GET["denumire"];

//update istoric
echo " Ingredientul cu id-ul '$idnou' a fost modificat";
$sql = "UPDATE ingredient SET denumire = '$denumire' WHERE id_ingredient = '$idnou'"; 
$result = $mysqli->query($sql);

?>
<br>
<a href="listare_ingrediente.php">Catre listarea ingredientelor</a>
</html>