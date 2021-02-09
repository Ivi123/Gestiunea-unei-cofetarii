<html>
<title> Tabela PERSONAL </title>
<body>


<h1> <FONT COLOR = "80604D" > Tabela PERSONAL </FONT> </h1>
<BR>

<body background = "2.jpg">

<form action="stergere_personal.php">
	Stergerea unui angajat cu id-ul:<br>
	<input type="text" name="camp"> 

  <input type="submit" value="Sterge"> <br>
</form>

<form action="update_istoric.php">

  Editarea unui istoric:<br>
  Id: <input type="text" name="idnou"> 
  Nume nou: <input type="text" name="nume"> 
  Prenume nou: <input type="text" name="prenume"> 
  Meseria noua: <input type="text" name="meserie"> 
  Adresa noua: <input type="text" name="adresa"> 
  Telefon nou: <input type="text" name="ntel"> 
	<input type="submit" value="Editare">
</form>

<form action="adaugare_personal.php">

  Adaugarea unui client:<br>
	Id: <input type="text" name="idnou"> 
  Nume: <input type="text" name="nume"> 
  Prenume: <input type="text" name="prenume"> 
  Meserie: <input type="text" name="meserie"> 
  Adresa: <input type="text" name="adresa"> 
  Telefon: <input type="text" name="ntel"> 
  
<input type="submit" value="Adaugare">
</form>

<div class = tabel>
  <table >
    <tr>
      <th> ID angajat </th> 
      <th> Nume </th>
      <th> Prenume </th>
      <th> Meserie </th>
      <th> Adresa </th>
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

//listare PERSONAL
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


$sql = "SELECT * FROM personal";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    //echo "ID-UL ANGAJATULUI: " . $row["id_personal"]."<br>". " NUME: " . $row["nume"]. "<br>". "PRENUME: " . $row["prenume"] . "<br>" . "MESERIE: " . $row["meserie"] . "<br>" . " ADRESA: " . $row["adresa"] . "<br>" . " TELEFON: 0" . $row["telefon"]. "<br>";
  //echo "<br>";
  echo "<tr><td>". $row["id_personal"]. "</td><td>". $row["nume"] ."</td><td>". $row["prenume"]. "</td><td>". $row["meserie"]."</td><td>".$row["adresa"]. "</td><td>". $row["telefon"]. "</td><td>";
  }
   echo "</table>";
} else {
  echo "0 results";
}

?>
<a href="index.php">Return to main page</a>
</html>