<html>
<title> Tabela INGREDIENT </title>
<body>

<h1> <FONT COLOR = "80604D" > Tabela INGREDIENT </FONT> </h1>
<body background = "3.jpeg">

<form action="stergere_ingredient.php">
	Stergerea unui ingredient cu id-ul:<br>
	<input type="text" name="camp"> 

  <input type="submit" value="Sterge"> <br>
</form>

<form action="update_ingredient.php">

  Editarea unui ingredient:<br>
  Id: <input type="text" name="idnou"> 
  Denumire: <input type="text" name="denumire"> 
  
	<input type="submit" value="Editare">
</form>

<form action="adaugare_ingredient.php">

  Adaugarea unui ingredient:<br>
  Denumire: <input type="text" name="denumire">
  
<input type="submit" value="Adaugare">
</form>

<div class = tabel>
  <table >
    <tr>
      <th> ID ingredient </th>
      <th> Denumire </th>
    </tr>
	
<style>
  .table
  {
    margin-left: 50px;
	margin-top: 20px;
	margin-right: 300px;
  }
      table, th, td {
		border: 1px solid #80604d;

}
table 
{
  width: 100%;
  font-family: Calibri Light;
  font-size: 20px;
  text-align: left;

}
th {
  background-color: #80604d;
  color: #e7d0b0;
}
tr: nth-child (even)
</style>

<?php

include "conexiune.php";


//listare clienti
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$sql = "SELECT * FROM ingredient ORDER BY denumire ";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "ID-UL INGREDIENTULUI: " . $row["id_ingredient"]. "<br>" . "  DENUMIRE: " . $row["denumire"]. "<br>";
  //echo "<br>";}
  echo "<tr><td>". $row["id_ingredient"]. "</td><td>". $row["denumire"] ."</td><td>";
  }
   echo "</table>";
} else {
  echo "0 results";
}

?>
<a href="index.php">Return to main page</
</html>