<body background = "3.jpeg">
<?php

include "conexiune.php";
//Vizualizarea furnizorilor care au incheiat o factura in data de '2020-12-31'

$sql = "SELECT * FROM `view_facturile_furnizorilor_data` LIMIT 0, 30 ";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Cod fiscal: " . $row["cod_fiscal"]." <br>". " Data: " . $row["data"]." <br> ". " Denumire furnizor: " . $row["denumire"]. "<br>";
	echo "<br>";
  }
} else {
  echo "0 results";
}
?>

<a href="index.php">Return to main page</a>