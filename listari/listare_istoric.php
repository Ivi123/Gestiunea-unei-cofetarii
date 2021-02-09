<html>
<title> Tabela ISTORIC </title>
<body>

<h1> <FONT COLOR = "80604D" > Tabela ISTORIC </FONT> </h1>
<BR>

<body background = "2.jpg">

<form action="stergere_istoric.php">
	Stergerea unui istoric cu id-ul:<br>
	<input type="text" name="camp"> 

  <input type="submit" value="Sterge"> <br>
</form>

<form action="update_istoric.php">

  Editarea unui istoric:<br>
  Id: <input type="text" name="idnou"> 
  ID angajat: <input type="text" name="idper"> 
  ID produs: <input type="text" name="idprod"> 
  Data noua: <input type="text" name="data"> 
	<input type="submit" value="Editare">
</form>

<form action="adaugare_istoric.php">

  Adaugarea unui istoric:<br>
  ID angajat: <input type="text" name="idper"> 
  ID produs: <input type="text" name="idprod"> 
  Data: <input type="text" name="data"> 
  
<input type="submit" value="Adaugare">
</form>

<div class = tabel>
  <table >
    <tr>
      <th> ID istoric </th> 
      <th> ID produs </th>
      <th> ID angajat </th>
      <th> Data producerii </th>
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

$sql = "SELECT * FROM istoric";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "ID-UL ISTORICULUI: " . $row["id_istoric"]. "<br>" .  " ID-UL PRODUSULUI: " . $row["id_produs"]. "<br>". "ID-UL ANGAJATULUI CARE L-A FACUT: " . $row["id_personal"]. "<br>" . " DATA LA CARE A FOST PRODUS: " . $row["data"]. "<br>";
	echo "<tr><td>". $row["id_istoric"]. "</td><td>". $row["id_produs"] ."</td><td>". $row["id_personal"]. "</td><td>". $row["data"]."</td><td>";
  }
   echo "</table>";
} else {
  echo "0 results";
}

?>

<a href="index.php">Return to main page</a>
</html>