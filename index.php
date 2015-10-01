<?php
try
{
	// On se connecte � MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=projectaudio;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arr�te tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On r�cup�re tout le contenu de la table episodes
$reponse = $bdd->query('SELECT * FROM episodes');

// On affiche chaque entr�e une � une
while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>Audio</strong> : <?php echo $donnees['Name']; ?><br />
    L'audio ecoutee en ce moment est dans le repertoire: <?php echo $donnees['Url']; ?><br />
	<audio id="audio" controls="controls" buffered preload="none">
  <source src="audio/donjon-de-naheulbeuk01.mp3" type="audio/mp3" />
  Votre navigateur n'est pas compatible
</audio>
<br/>
<button onclick="setCurTime()" type="button">Set time position to 20 seconds before</button>
  <script>
var audio = document.getElementById("audio");

function setCurTime() { 
    audio.currentTime=audio.currentTime -20;
} 
</script> 
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requ�te

?>