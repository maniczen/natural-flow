<?php

//Otetaan lomakkeelta tulevat syötteet talteen
echo $email = $_POST['email'];
echo $salasana = $_POST['salasana'];

//Määritetään yhteys tietokantaan 
include ("funktioita.php");

// Avataan yhteys tietokantaan - testaa heti
$yhteys = yhdista_tietokantaan();

//Muodostetaan SQL-kysely, joka etsii käyttäjän tiedot. 			
$sql="SELECT * FROM kayttajat WHERE email='$email' AND salasana='$salasana'";

// Tehdään kysely tietokantaan
$tulos = $yhteys->query($sql);

// Tarkistetaan löytyykö tunnukset tietokannasta
if($tulos->num_rows > 0){
	echo "Kirjautuminen onnistui!";
	header("Location: ../index.html");
}else{	 
	header("Location: login.html");
	//echo "Kirjautuminen ei onnistunut! <a href='login.html'>takasin</a>";
}

?>