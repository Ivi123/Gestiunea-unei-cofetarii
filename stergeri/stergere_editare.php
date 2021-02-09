<html>
<body background = "2.jpg">
<form action="stergere_update_inregistrare.php">
	Stergerea unui client cu id-ul:
	<input type="text" name="camp"> 

  <input type="submit" value="Submit"> <br>
</form>

<form action="update_inregistrare.php">

  Editarea unui client<br>
  Id: <input type="text" name="idnou"> 
  Nume si prenume nou: <input type="text" name="numpren"> 
	<input type="submit" value="Submit">
</form>

<?php
include "conexiune.php";
//listare clienti
include "listare_clienti.php";

?>

</html>