<body background = "3.jpeg">

<?php

include "conexiune.php";

echo "<h2> Afisarea meseriilor efectuate de catre cel putin doua persoane </h2>";
$sql = "SELECT COUNT(id_personal), meserie FROM personal GROUP BY meserie HAVING COUNT(id_personal) >= 2"; 
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Meseria: " . $row["meserie"]. "<br>" . " Cati angajati o profeseaza: ". $row["COUNT(id_personal)"] . "<BR>" ;
	echo "<br>";
  }
} else {
  echo "0 results";
}

include "listare_personal.php";

?>

<a href="index.php">Return to main page</a>