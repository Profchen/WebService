<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=projectaudio;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table episodes
$reponse = $bdd->query('SELECT * FROM episodes');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>Audio</strong> : <?php echo $donnees['Name']; ?><br />
    L'audio ecoutee en ce moment est dans le repertoire: <?php echo $donnees['Url']; ?><br />
    
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>