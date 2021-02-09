<body background = "2.jpg">
<?php

include "conexiune.php";

$idper = $_GET["idper"];
$idprod= $_GET["idprod"];
$data = $_GET["data"];

//adaugare
echo "<h2> Datele noului istoric: '$idper', '$idprod', '$data'</h2>";
$sql = "INSERT INTO istoric (id_istoric, id_personal, id_produs, data) VALUES ('null', '$idper', '$idprod', '$data')"; 
$result = $mysqli->query($sql);


?>
<br>
<a href="listare_istoric.php">Catre listarea istoricului</a>