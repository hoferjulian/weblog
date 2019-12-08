<?php
require_once 'includes/funktionen.inc.php';
session_start();
$benutzer = array(
  'vorname'            => ($_POST['vorname']),
  'nachname'           => ($_POST['nachname']),
  'benutzername'       => $_POST['benutzername'],
  'passwort'            => $_POST['passwort']
);

registrierung_speichern($benutzer);
logge_ein($_POST['benutzername']);

  header('Location: index.php');

?>
