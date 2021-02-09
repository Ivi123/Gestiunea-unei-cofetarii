<html>
<title> Tabela FURNIZOR </title>
<body>

<h1> <FONT COLOR = "80604D" > Tabela FURNIZORI </FONT> </h1>
<body background = "2.jpg">

<form action="stergere_furnizor.php">
	Stergerea unui furnizor cu id-ul:<br>
	<input type="text" name="camp"> 

  <input type="submit" value="Sterge"> <br>
</form>

<form action="update_furnizori.php">

  Editarea unui furnizor:<br>
  Cod fiscal: <input type="text" name="idnou"> 
  Denumire: <input type="text" name="denumire"> 
  Telefon: <input type="text" name="telefon"> 
  
	<input type="submit" value="Editare">
</form>

<form action="adaugare_furnizor.php">

	Adaugarea unui furnizor:<br>
	Denumire: <input type="text" name="denumire"> 
	Telefon: <input type="text" name="telefon"> 
  
<input type="submit" value="Adaugare">
</form>

<div class = tabel>
  <table >
    <tr>
      <th> Codul Fiscal al Furnizorului </th>
	  <th> Nume Furnizor </th> 
      <th> Telefon </th>
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

$sql = "SELECT * FROM furnizor ";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo  "CODUL FISCAL AL FURNIZORULUI: " . $row["cod_fiscal"]. "<br>" . "NUMELE FURNIZORULUI: " . $row["denumire"]. "<br>" . "TELEFON: 0" . $row["telefon"]. "<br>";
	//echo "<br>";}
	echo "<tr><td>". $row["cod_fiscal"]. "</td><td>". $row["denumire"] ."</td><td>". $row["telefon"]. "</td><td>";
  }
   echo "</table>";
} else {
  echo "0 results";
}

?>
<a href="index.php">Return to main page</
</html>