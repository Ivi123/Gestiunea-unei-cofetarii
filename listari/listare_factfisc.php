<html>
<title> Tabela FACTURA FISCALA </title>
<body>

<h1> <FONT COLOR = "80604D" > Tabela FACTURA FISCALA </FONT> </h1>

<body background = "2.jpg">

<form action="stergere_factfisc.php">
	Stergerea unei facturi fiscale cu id-ul:<br>
	<input type="text" name="camp"> 

  <input type="submit" value="Sterge"> <br>
</form>

<form action="update_factfisc.php">

  Editarea unui facturi fiscale:<br>
  Id: <input type="text" name="idnou"> 
  Cod fiscal: <input type="text" name="codfiscal"> 
  Data: <input type="text" name="data"> 
  
	<input type="submit" value="Editare">
</form>

<form action="adaugare_factfisc.php">

	Adaugarea unei facturi fiscale:<br>
	Cod fiscal: <input type="text" name="codfiscal"> 
	Data: <input type="text" name="data"> 
  
<input type="submit" value="Adaugare">
</form>

<div class = tabel>
  <table >
    <tr>
      <th> ID Factura Fiscala </th> 
      <th> Codul Fiscal al Furnizorului </th>
      <th> Data</th>
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

$sql = "SELECT * FROM `factura fiscala` ";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "ID-UL FACTURII: " . $row["id_factura"]. "<br>" .  " CODUL FISCAL AL FURNIZORULUI: " . $row["cod_fiscal"]. "<br>". "DATA: " . $row["data"]. "<br>";
	//echo "<br>";}
	echo "<tr><td>". $row["id_factura"]. "</td><td>". $row["cod_fiscal"] ."</td><td>". $row["data"]. "</td><td>";
  }
   echo "</table>";
   
} else {
  echo "0 results";
}

?>
<a href="index.php">Return to main page</
</html>