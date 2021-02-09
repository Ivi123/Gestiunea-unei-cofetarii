<body background = "3.jpeg">
<?php

include "conexiune.php";
//Vizualizarea pretului minim, maxim si cheltuielile totale

$sql = "SELECT * FROM `view_cheltuieli_totale` LIMIT 0, 30 ";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Pretul minim: " . $row["Pretul Minim"]. "<br>". " Pretul maxim: " . $row["Pretul Maxim"]. "<br>" . " Cheltuieli totale: " . $row["Cheltuieli Totale"]. "<br>";
	echo "<br>";
  }
} else {
  echo "0 results";
}
?>

<a href="index.php">Return to main page</a>