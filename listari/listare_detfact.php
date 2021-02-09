<html>
<title> Tabela DETALIU FACTURA </title>
<body>

<h1> <FONT COLOR = "80604D" > Tabela DETALIU FACTURA </FONT> </h1>

<body background = "3.jpeg">

<form action="stergere_detfact.php">
	Stergerea unui detaliu dintr-o factura cu id-ul:<br>
	<input type="text" name="camp"> 

  <input type="submit" value="Sterge"> <br>
</form>

<form action="update_detfact.php">

  Editarea unui detaliu dintr-o factura:<br>
  Id: <input type="text" name="idnou"> 
  ID ingredient: <input type="text" name="iding"> 
  ID factura: <input type="text" name="idfact"> 
  Pretul total: <input type="text" name="pret"> 
  Cantitate: <input type="text" name="cantitate"> 
  
	<input type="submit" value="Editare">
</form>

<form action="adaugare_detfact.php">

  Adaugarea unui detaliu pentru o factura:<br>
  ID ingredient: <input type="text" name="iding"> 
  ID factura: <input type="text" name="idfact"> 
  Pretul total: <input type="text" name="pret"> 
  Cantitate: <input type="text" name="cantitate"> 
  
<input type="submit" value="Adaugare">
</form>

<div class = tabel>
  <table >
    <tr>
      <th> ID detaliu </th> 
      <th> ID ingredient </th>
	  <th> ID factura </th>
	  <th> Pretul total </th>
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


//listare clienti
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$sql = "SELECT * FROM `detaliu factura` ";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "ID-UL FACTURII: " . $row["id_detfact"]. "<br>" .  " ID INGREDIENT: " . $row["id_ingredient"]. "<br>". "ID FACTURA: " . $row["id_factura"]. "<br>". "PRETUL TOTAL: " . $row["pret"]. "<br>".  " CANTITATE: " . $row["cantitate"]. "<br>";
	//echo "<br>";
  echo "<tr><td>". $row["id_detfact"]. "</td><td>". $row["id_ingredient"] ."</td><td>". $row["id_factura"]. "</td><td>". $row["pret"]."</td><td>" . $row["cantitate"]."</td><td>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

?>
<a href="index.php">Return to main page</
</html>