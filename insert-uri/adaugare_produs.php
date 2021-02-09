<body background = "2.jpg">
<?php

include "conexiune.php";

$denumire= $_GET["denumire"];
$pret = $_GET["pret"];

//adaugare
echo "<h2> Datele noului produs: '$denumire', '$pret'</h2>";
$sql = "INSERT INTO produs (id_produs, denumire, pret) VALUES ('null', '$denumire', '$pret')"; 
$result = $mysqli->query($sql);


?>
<br>
<a href="listare_produse.php">Catre listarea produselor</a>