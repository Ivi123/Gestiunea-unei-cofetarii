<html>
<title> Tabela PRODUS </title>
<body>

<h1> <FONT COLOR = "80604D" > Tabela PRODUS </FONT> </h1>
<BR>

<body background = "2.jpg">

<form action="stergere_produs.php">
	Stergerea unui produs cu id-ul:<br>
	<input type="text" name="camp"> 

  <input type="submit" value="Sterge"> <br>
</form>

<form action="update_produs.php">

  Editarea unui produs:<br>
  Id: <input type="text" name="idnou"> 
  Denumirea noua: <input type="text" name="denumire"> 
  Pret nou: <input type="text" name="pret"> 
	<input type="submit" value="Editare">
</form>

<form action="adaugare_produs.php">

  Adaugarea unui produs:<br>
  Denumire: <input type="text" name="denumire"> 
  Pret: <input type="text" name="pret"> 
  
<input type="submit" value="Adaugare">
</form>

<div class = tabel>
  <table >
    <tr>
      <th> ID produs </th>
      <th> Denumire </th>
      <th> Pret </th>
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

$sql = "SELECT * FROM produs ORDER BY pret ASC";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "ID-UL PRODUSULUI: " . $row["id_produs"]. "<br>" .  " DENUMIRE: " . $row["denumire"]. "<br>". "PRET: " . $row["pret"]. "<br>";
	//echo "<br>";
	echo "<tr><td>". $row["id_produs"]. "</td><td>". $row["denumire"] ."</td><td>". $row["pret"]. "</td><td>";
  }
   echo "</table>";
  }
  else {
  echo "0 results";
}

?>
<a href="index.php">Return to main page</a>
</html>