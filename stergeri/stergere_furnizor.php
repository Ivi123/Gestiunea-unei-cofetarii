<body background = "3.jpeg">
<?php

include "conexiune.php";

$delcod = $_GET["camp"];

//stergere furnizor
echo "<h2> Furnizorul cu codul fiscal:  $delcod a fost sters  </h2>";
$sql = "DELETE FROM furnizor WHERE cod_fiscal = $delcod "; 
$result = $mysqli->query($sql);

?>

<a href="listare_furnizori.php">Catre listarea furnizorilor</a>