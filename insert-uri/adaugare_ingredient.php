<body background = "2.jpg">
<?php

include "conexiune.php";

$denumire= $_GET["denumire"];

//adaugare
echo "<h2> Denumirea noului ingredient: '$denumire'</h2>";
$sql = "INSERT INTO ingredient (id_ingredient, denumire) VALUES ('null', '$denumire')"; 
$result = $mysqli->query($sql);


?>
<br>
<a href="listare_ingrediente.php">Catre listarea ingredientelor</a>