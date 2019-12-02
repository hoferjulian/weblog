<?php

function getDBConnection(){
    $db = NULL;
    try {
         $db = new PDO('mysql:host=localhost;dbname=weblog;port=3306','root');
         $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $db;


}

function hole_eintraege()
    {
    $statement = "SELECT b.id, bei.title, bei.inhalt, bei.datum, bei.benutzer_id,b.vorname,b.nachname FROM beitraege bei JOIN benutzer b ON b.id = bei.benutzer_id";
    $db = getDBConnection();
    $erg = array();
    if($db != null){
        $erg = $db->query($statement);
        $ergebnis = $erg->fetchAll();
    }
    return $ergebnis;
    }

    function ist_eingeloggt()
    {
        $erg = false;
        if (isset($_SESSION['eingeloggt'])){
            if (!empty($_SESSION['eingeloggt']))
                    $erg = true;
        }
        return $erg;
    }

    function logge_ein($benutzername)
    {
    	$_SESSION['eingeloggt'] = $benutzername;
    }

    function logge_aus()
    {
    	unset($_SESSION['eingeloggt']);
    }
  function check_login($benutzername){
    $statement="SELECT benutzername from benutzer where benutzername ='".$benutzername."'";
    $db = getDBConnection();
    if($db != null){
        $erg = $db->query($statement);
        $ergebnis = $erg->rowCount();

        return $ergebnis;
    }else{
        return $ergebnis;
    }

  }
  function neuer_beitrag($eintrag){
    $titel = $eintrag['title'];
    $text = $eintrag['inhalt'];
    $autor = $eintrag['eingeloggt'];
    $statement="insert into beitraege(title,inhalt,datum,benutzer_id)VALUES(".$titel.",".$text.",)";
    $db = getDBConnection();



  }

?>
