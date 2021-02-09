<html>
<head>
</head>
	<meta charset="utf-8">
	
<title> Gestiunea unei cofetarii </title>

<body>

<h1> <FONT COLOR = "432711" > GESTIUNEA UNEI COFETARII </FONT> </h1>
<hr>
<h2> <Font color = "432711" > Listare tabele, stergere, editare si adaugare: </font> </h2>  

<nav>
	        <ul>
				<li><a href="listare_personal.php">  PERSONAL </a></li>
				<li><a href="listare_istoric.php"> ISTORIC </a></li>
				<li><a href="listare_produse.php"> PRODUS </a></li>
				<li><a href="listare_retete.php"> RETETA </a></li>
				<li><a href="listare_ingrediente.php"> INGREDIENT </a></li>
				<li><a href="listare_detfact.php"> DETALIU FACTURA </a></li>
				<li><a href="listare_factfisc.php"> FACTURA FISCALA </a></li>
				<li><a href="listare_furnizori.php"> FURNIZOR </a></li>
				<li><a href="listare_clienti.php">  CLIENT  </a></li>
				<li><a href="listare_comenzi.php">  COMANDA </a></li>
				<li><a href="listare_descrieric.php"> DESCRIERE COMANDA </a></li>
				
	        </ul>
</nav>


<body background = "4.png">
<?php

include "conexiune.php";


?>

<form action = "tabele.php"> 
 SORTAREA TABELEI:<br>
  <input type="text"  name="sortare"><br>
 DUPA COLOANA: <br>
  <input type="text"  name="coloana"><br>
  
  <input type="submit"  value="Sorteaza"><br>
</form> 
<hr>
<nav>
	<ul>
		<li><a href="functie1.php"> Afișarea rezultatului unei cereri care extrage informații din cel puțin 3 tabele şi le filtrează cu ajutorul a cel puțin 2 condiții </a></li>
	</ul>
</nav>

<hr>

<nav>
	<ul>
		<li><a href="functii_grup_having.php"> Afișarea rezultatului unei cereri care folosește funcții grup și o clauza having </a></li>
	</ul>
</nav>

<hr>

<nav>
	<ul>
		<li><a href="vizualizari.php"> Vizualizari </a></li>
	</ul>
</nav>

<hr>


<form action="cautare_keyword.php">
  Introdu numele produsului pentru a afla pretul: <br>
  <input type="text" name="keyword"><br>

  <input type="submit" value="Submit">
</form>

<hr>

<form action="adaugare_client.php">
  Introdu urmatoarele informatii despre noul client: <br>
  Nume si prenume: <br>
  <input type="text" name="newnume"><br>

  Numarul de telefon: <br>
  <input type="text" name="newtelefon"><br>
  <input type="submit" value="Submit">
</form>

<hr>

<?php

//include "cautare_keyword.php";

$mysqli->close();

?>

</body>

</html>