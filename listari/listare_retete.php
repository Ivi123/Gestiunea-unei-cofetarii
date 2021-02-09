<html>
<title> Tabela RETETA </title>
<body>

<h1> <FONT COLOR = "80604D" > Tabela RETETA </FONT> </h1>
<body background = "3.jpeg">

<form action="stergere_reteta.php">
	Stergerea unei retete cu id-ul:<br>
	<input type="text" name="camp"> 

  <input type="submit" value="Sterge"> <br>
</form>

<form action="update_reteta.php">

  Editarea unui retete:<br>
  Id: <input type="text" name="idnou"> 
  ID produs: <input type="text" name="idprod"> 
  ID ingredient: <input type="text" name="iding"> 
  Cantitate: <input type="text" name="cantitate"> 
  
	<input type="submit" value="Editare">
</form>

<form action="adaugare_reteta.php">

  Adaugarea unei retete:<br>
 ID produs: <input type="text" name="idprod"> 
  ID ingredient: <input type="text" name="iding"> 
  Cantitate: <input type="text" name="cantitate">
  
<input type="submit" value="Adaugare">
</form>

<div class = tabel>
  <table >
    <tr>
      <th> ID reteta </th> 
      <th> ID produs </th>
      <th> ID ingredient </th>
      <th> Cantitate </th>
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


if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$sql = "SELECT * FROM reteta ";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    //echo "ID RETETA: " . $row["id_reteta"]. "<br>" .  " ID PRODUS: " . $row["id_produs"]. "<br>". "ID INGREDIENT: " . $row["id_ingredient"]. "<br>" . " CANTITATE: " . $row["cantitate"]. "<br>";
	//echo "<br>";
	echo "<tr><td>". $row["id_reteta"]. "</td><td>". $row["id_produs"] ."</td><td>". $row["id_ingredient"]. "</td><td>". $row["cantitate"]."</td><td>";
  }
   echo "</table>";
 
} else {
  echo "0 results";
}

?>
<a href="index.php">Return to main page</
</html>