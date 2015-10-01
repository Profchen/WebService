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