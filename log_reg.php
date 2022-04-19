<!DOCTYPE html>
<html>
<head>
  <title>Bejelentkezés/regisztráció</title>
</head>
<body>


						<!-- BEJELENTKEZÉS -->
						
<table width="100%">	
	<tr>
		<td width="50%">
			
			<form action="login.php" method="post">
			<h2>Bejelentkezés</h2>
			E-mail cím: <br>
			<input type="email" name="email" ><br>
			Jelszó:<br>
			<input type="password" name="jelszo"><br>
			<br>
			<a href='login.php'>
			<input type="submit" name="elkuld_log" value="Bejelentkezés">
			</a>
			<br>
			<br>
			Nincs még felhasználói fiókod? Akkor regisztrálj!
				
				
			</form>
			
		</td>

						<!-- REGISZTRÁCIÓ -->	

		<td width="50%">
			
			<form action="reg.php" method="post">
			<h2>Regisztráció</h2>
			Felhasználónév: <br>
			<input type="text" name="nev"><br>
			Jelszó: <br>
			<input type="password" name="jelszo1"><br>
			Jelszó mégegyszer: <br>
			<input type="password" name="jelszo2"><br>
			E-mail címed: <br>
			<input type="email" name="email"><br>
			<br>
			<a href='reg.php'>
			<input type="submit" name="elkuld" value="Regisztráció">
			</a>
			<br>
			<br>
			Miért érdemes regisztrálni? Olvasd el <a href="erdemes.html">itt.</a>
			<br>
			Ha van már felhasználói fiókod, akkor jelentkezz be!
			</form>
			
		</td>
	</tr>
</table>



</body>
</html>