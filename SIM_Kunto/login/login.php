<?php

//Otetaan lomakkeelta tulevat sy�tteet talteen
echo $email = $_POST['email'];
echo $salasana = $_POST['salasana'];

//M��ritet��n yhteys tietokantaan 
include ("funktioita.php");

// Avataan yhteys tietokantaan - testaa heti
$yhteys = yhdista_tietokantaan();

//Muodostetaan SQL-kysely, joka etsii k�ytt�j�n tiedot. 			
$sql="SELECT * FROM kayttajat WHERE email='$email' AND salasana='$salasana'";

// Tehd��n kysely tietokantaan
$tulos = $yhteys->query($sql);

// Tarkistetaan l�ytyyk� tunnukset tietokannasta
if($tulos->num_rows > 0){
	echo "Kirjautuminen onnistui!";
	header("Location: ../index.html");
}else{	 
	header("Location: login.html");
	//echo "Kirjautuminen ei onnistunut! <a href='login.html'>takasin</a>";
}

?>