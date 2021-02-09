<html>
<title> Tabela COMANDA </title>
<body>

<h1> <FONT COLOR = "80604D" > Tabela COMANDA </FONT> </h1>
ORDONARE CRESCATOARE DUPA DATA: <br>
<br>
<body background = "2.jpg">

<form action="stergere_comanda.php">
	Stergerea unei comenzi cu id-ul:<br>
	<input type="text" name="camp"> 

  <input type="submit" value="Sterge"> <br>
</form>

<form action="update_comanda.php">

  Editarea unui comenzi:<br>
  Id: <input type="text" name="idnou"> 
  Id client: <input type="text" name="idc"> 
  Data: <input type="text" name="data"> 
  
	<input type="submit" value="Editare">
</form>

<form action="adaugare_comanda.php">

	Adaugarea unei comenzi:<br>
	Id client: <input type="text" name="idc"> 
	Data: <input type="text" name="data"> 
  
  
<input type="submit" value="Adaugare">
</form>

<div class = tabel>
  <table >
    <tr>
      <th> ID Comanda</th> 
      <th> ID Client </th>
      <th> Data la care va fi ridicata </th>
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

$sql = "SELECT * FROM comanda ORDER BY data ASC";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   // echo  "ID-UL COMENZII: " . $row["id_comanda"]. "<br>" . "ID-UL CLIENTULUI: " . $row["id_client"]. "<br>" . "DATA LA CARE VA FI RIDICATA: " . $row["data"]. "<br>";
	//echo "<br>";}
	echo "<tr><td>". $row["id_comanda"]. "</td><td>". $row["id_client"] ."</td><td>". $row["data"]. "</td><td>";
  }
   echo "</table>";
} else {
  echo "0 results";
}

?>
<a href="index.php">Return to main page</
</html>