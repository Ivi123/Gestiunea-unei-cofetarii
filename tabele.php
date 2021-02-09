<!DOCTYPE html>
<html>

<body>
<body background = "3.jpeg">

<?php
// Cautare 

include "conexiune.php";

$sort = $_GET["sortare"];
$col = $_GET["coloana"];
 
echo "<h2> Tabela '$sort' ordonata dupa coloana '$col' </h2>";

$sql = "SELECT * FROM $sort order by $col";

$result = $mysqli->query($sql);

if ($result != false && $result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    print '<pre>';
     print_r ($row);
    print '<pre>';
  }

} 
else {
  echo "0 ";
}
?>
</div>
</body>
  <li><a href= "index.php">Return to main page</a></li>
</html>
