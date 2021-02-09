<html>
<title> Tabela DESCRIERE COMANDA </title>
<body>

<h1> <FONT COLOR = "80604D" > Tabela DESCRIERE COMANDA </FONT> </h1>

<body background = "3.jpeg">

<form action="stergere_desccom.php">
	Stergerea descrierii unei comenzi cu id-ul:<br>
	<input type="text" name="camp"> 

  <input type="submit" value="Sterge"> <br>
</form>

<form action="update_desccom.php">

  Editarea descrierii unei comenzi :<br>
  Id: <input type="text" name="idnou"> 
  Id produs: <input type="text" name="idprod"> 
  Id comanda: <input type="text" name="idcom"> 
  Cantitate: <input type="text" name="cantitate"> 
  
	<input type="submit" value="Editare">
</form>

<form action="adaugare_desccom.php">

	Adaugarea descrierii unei comenzi:<br>
	 Id produs: <input type="text" name="idprod"> 
	Id comanda: <input type="text" name="idcom"> 
	Cantitate: <input type="text" name="cantitate"> 
	
<input type="submit" value="Adaugare">
</form>

<div class = tabel>
  <table >
    <tr>
      <th> ID Descriere</th> 
      <th> ID Produs </th>
      <th> ID Comanda </th>
	  <th> Cantitate</th>

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

$sql = "SELECT * FROM `descriere comanda` ";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   // echo "ID-UL DESCRIERII: " . $row["id_desc"]. "<br>" .  " ID-UL PRODUSULUI DIN COMANDA " . $row["id_produs"]. "<br>". "ID-UL COMENZII: " . $row["id_comanda"]. "<br>". "CANTITATEA COMANDATA: ". $row["cantitate"]. "<br>" ;
	//echo "<br>";}
	echo "<tr><td>". $row["id_desc"]. "</td><td>". $row["id_produs"] ."</td><td>". $row["id_comanda"]. "</td><td>". $row["cantitate"]."</td><td>";
  }
   echo "</table>";
} else {
  echo "0 results";
}

?>
<a href="index.php">Return to main page</
</html>