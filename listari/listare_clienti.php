<html>
<title> Tabela CLIENT </title>
<body>

<h1> <FONT COLOR = "80604D" > Tabela CLIENT </FONT> </h1>

<body background = "2.jpg">

<form action="stergere_clienti.php">
	Stergerea unui client cu id-ul:<br>
	<input type="text" name="camp"> 

  <input type="submit" value="Sterge"> <br>
</form>

<form action="update_clienti.php">

  Editarea unui client:<br>
  Id: <input type="text" name="idnou"> 
  Nume si prenume nou: <input type="text" name="numpren"> 
  Telefon nou: <input type="text" name="ntel"> 
	<input type="submit" value="Editare">
</form>

<form action="adaugare_client.php">

  Adaugarea unui client:<br>

  Nume si prenume: <input type="text" name="numpren"> 
  Telefon: <input type="text" name="ntel"> 
  
<input type="submit" value="Adaugare">
</form>


<div class = tabel>
  <table >
    <tr>
      <th> ID Client </th> 
      <th> Nume </th>
      <th> Telefon</th>
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

$sql = "SELECT * FROM client ";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "ID-UL CLIENTULUI: " . $row["id_client"]. "<br>" .  " NUME: " . $row["nume"]. "<br>". "TELEFON: 0" . $row["telefon"]. "<br>";
	//echo "<br>";}
	echo "<tr><td>". $row["id_client"]. "</td><td>". $row["nume"] ."</td><td>". $row["telefon"]. "</td><td>";
  }
   echo "</table>";
} else {
  echo "0 results";
}

?>
<a href="index.php">Return to main page</a>
</html>