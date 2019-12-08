
<style>
input[type=text], input[type=password]{
	width: 90%;
	padding: 12px 20px;
	margin:8px 26px;
	display: inline-block;
	border: 1px solid #ccc;
	box-sizing: border-box;
	font-size: 16px;
}
</style>


<form action="registrieren.php" method="post">
<input type="text" placeholder="vorname" name="vorname" id="vorname" />
<input type="text" placeholder="nachname" name="nachname" id="nachname" />
<input type="text" placeholder="benutzername" name="benutzername"id="benutzername" />
<input type="password" placeholder="passwort" name="passwort" id="passwort" />
<button type="submit" value="Registrieren" class="button">Registrieren</button>

</form>


<form action="einloggen.php" method="post">
    <p><input type="text" name="benutzername" id="benutzername" /></p>
    <p><input type="password" name="passwort" id="passwort" /></p>
    <p><input type="submit" value="Einloggen" class="button" /></p>
</form>
