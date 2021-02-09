<body background = "3.jpeg">
<?php
//Vizualizarea tuturor comenzilor ordonate crescator dupa data
include "conexiune.php";

$sql = "SELECT * FROM `view_cantitate_comanda` LIMIT 0, 30 ";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Data comenzii: " . $row["data"]." <br>". " Cantitatea: " . $row["cantitate"]." <br> ". " ID comanda " . $row["id_comanda"]. "<br>";
	echo "<br>";
  }
} else {
  echo "0 results";
}
?>

<a href="index.php">Return to main page</a>