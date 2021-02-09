<HTML>

<body background = "3.jpeg">
<?php

include "conexiune.php";

$keywordfromform = $_GET["keyword"];

//cautare pret pentru un keyword
echo "<h2> Cauta pretul produsului:  $keywordfromform </h2>";
$sql = "SELECT id_produs, denumire, pret FROM produs WHERE denumire LIKE '%" . $keywordfromform . "%'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id-ul produsului: " . $row["id_produs"]. " - Nume: " . $row["denumire"]. " are pretul: " . $row["pret"]. "<br>";
  }
} else {
  echo "0 results";
}

?>
</HTML>