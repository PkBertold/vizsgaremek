<?php 

require_once("adatbazis.php"); //Adatbázis kapcsolat

$nev = $_POST["nev"];          //Az elküldött mezők adatainak mentése változókba
$jelszo = $_POST["jelszo1"];
$jelszo2 = $_POST["jelszo2"];
$email = $_POST["email"];

	if($nev && $jelszo && $jelszo2 && $email != "") //Minden mező kitöltésének az ellenőrzése
	{	

		if($jelszo !== $jelszo2){    //Jelszómezők összehasionlítása: AMennyiben nem egyezik a két jelszómező tartalma...
			include "log_reg.php";   //...visszaküld a regisztráció oldalára és
			echo '<script>alert("Nem azonos a két jelszó")</script>'; //... figyelmeztetés jelenik meg a helytelen kitöltésről
		
		}else{	                                               //A jelszómezők egyezése esetén...
			$sql = "SELECT * FROM user WHERE mail='$email'";   //... viszgálatra kerül a megadott email-cím
			$select = $db_connect->query($sql);
			$mennyi = mysqli_num_rows($select);

			if($mennyi > 0){  //Amennyiben létezik az adatbázisban ilyen email-cím
				include "log_reg.php";  //... visszaküld a regisztrációs űrlaphoz
				echo '<script>alert("Ehhez az e-mail címhez már tartozik felhasználói fiók!")</script>'; //... valamint figyelmeztet az egyezésről
				
			}else{            //Ellenkező esetben (amennyiben még nem regisztráltak ilyen címmel)
				$sql = "INSERT INTO `user`( `name`, `jelszo`, `mail`) VALUES ('$nev','$jelszo','$email')";  //... beszúrásra kerülnek az adatok
				$insert = $db_connect->query($sql);
				include "log_reg.php";   //... táblába rögzítés után visszaküld a bejelentkezés oldalra
				echo '<script>alert("Sikeres regisztráció, jelentkezz be az email címeddel ' .$nev. '!")</script>';
				//...és névreszóllóan figyelmeztet a siekres regisztrációról
			}
		}
	}else{ //Amennyiben kimaradt egy vagy több regisztrációhoz szükséges mező
		include "log_reg.php"; //... visszaküld a regisztrációhoz
		echo '<script>alert("Minden mező kitöltése kötelező!")</script>'; //... valamint figyelmeztet a helyes kitöltésről
	}

?>