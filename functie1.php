<body background = "3.jpeg">

<?php

include "conexiune.php";

echo "<h2> Toate produsele care au fost facute de catre Gardin Alex in data de 2021-01-06 </h2>";
$sql = "SELECT  pr.id_produs, pr.denumire, pe.nume, pe.prenume, i.data FROM personal pe join 
istoric i on (pe.id_personal = i.id_personal) join produs pr on (i.id_produs=pr.id_produs)
WHERE pe.nume = 'Gardin' and pe.prenume = 'Alex' and i.data = '2021-01-06'"; 
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Denumire produs: " . $row["denumire"]. "<br>" . " Nume cofetar: ". $row["nume"] . "<BR>" . " Prenume cofetar: ". $row["prenume"] . "<BR>" . " Data: ". $row["data"] . "<BR>";
	echo "<br>";
  }
} else {
  echo "0 results";
}

include "listare_personal.php";
?>
