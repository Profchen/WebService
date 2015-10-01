<!--
<html>
  <head>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
  </head>
<body>
 
 
<audio id="audio" controls="controls" preload="auto" tabindex="0" >
  <source id="primarysrc" src="http://www.archive.org/download/bolero_69/Bolero.mp3">
  <source id="secondarysrc" src="http://www.archive.org/download/bolero_69/Bolero.ogg">
  Your Fallback goes here
</audio>
 
 
<ul id="playlist">
        <li class="active">
            <a href="http://www.archive.org/download/bolero_69/Bolero.mp3" data-altsrc="http://www.archive.org/download/bolero_69/Bolero.ogg">
                Ravel Bolero
            </a>
        </li>
        <li>
            <a href="http://www.archive.org/download/MoonlightSonata_755/Beethoven-MoonlightSonata.mp3" data-altsrc="http://www.archive.org/download/MoonlightSonata_755/Beethoven-MoonlightSonata.ogg">
                Moonlight Sonata - Beethoven
            </a>
        </li>
        <li>
            <a href="http://www.archive.org/download/CanonInD_261/CanoninD.mp3" data-altsrc="http://www.archive.org/download/CanonInD_261/CanoninD.ogg">
                Canon in D Pachabel
            </a>
        </li>
    </ul>
<script>
var audio;
var playlist;
var tracks;
var current;
 
init();
function init(){
    current = 0;
    audio = $('#audio');
    playlist = $('#playlist');
    tracks = playlist.find('li a');
    len = tracks.length - 1;
    audio[0].volume = .60;
//    audio[0].play();
    playlist.find('a').click(function(e){
        e.preventDefault();
        link = $(this);
        current = link.parent().index();
        run(link, audio[0]);
    });
    audio[0].addEventListener('ended',function(e){
        current++;
        if(current == len){
            current = 0;
            link = playlist.find('a')[0];
        }else{
            link = playlist.find('a')[current];   
        }
        run($(link),audio[0]);
    });
}
function run(link, player){
    $(player).find('#primarysrc').attr('src', link.attr('href'));
$(player).find('#secondarysrc').attr('src', link.attr('data-altsrc'));
    par = link.parent();
    par.addClass('active').siblings().removeClass('active');
    player.load();
    player.play();
}
</script>
</body>
</html>
<!-- <audio controls="controls" buffered preload="none">
  <source src="audio/donjon-de-naheulbeuk01.mp3" type="audio/mp3" />
  Votre navigateur n'est pas compatible
</audio>-->

 <!DOCTYPE html>
<html>
  <head>
    <title>Audio playbackRate Example</title>  
</head>
<body>
<div>
<button onclick="setCurTime()" type="button">Set time position to 20 seconds before</button><br> 
  <audio id="audio" style="width:25%" controls>Canvas not supported</audio>
</div>
<div>
<input type="text" id="audioFile" value="audio/donjon-de-naheulbeuk01.mp3" size="60" />


</div>
  <button id="playbutton" onclick="togglePlay();">Play</button>  
  <button onclick="increaseSpeed();">Increase speed</button>
  <button onclick="decreaseSpeed();">Decrease speed</button><br />
  <div id="rate"></div>
  <script>
var audio = document.getElementById("audio");

function setCurTime() { 
    audio.currentTime=audio.currentTime -20;
} 
</script> 

     <script type="text/javascript">
       // Create a couple of global variables to use. 
       var audioElm = document.getElementById("audio"); // Audio element
       var ratedisplay = document.getElementById("rate"); // Rate display area

       // Hook the ratechange event and display the current playbackRate after each change
       audioElm.addEventListener("ratechange", function () {
         ratedisplay.innerHTML = "Rate: " + audioElm.playbackRate;
       }, false);

       //  Alternates between play and pause based on the value of the paused property
       function togglePlay() {
         if (document.getElementById("audio")) {

           if (audioElm.paused == true) {
             playAudio(audioElm);    //  if player is paused, then play the file
           } else {
             pauseAudio(audioElm);   //  if player is playing, then pause
           }
         }
       }

       function playAudio(audioElm) {
         document.getElementById("playbutton").innerHTML = "Pause"; // Set button text == Pause
         // Get file from text box and assign it to the source of the audio element 
         audioElm.src = document.getElementById('audioFile').value;
         audioElm.play();
       }

       function pauseAudio(audioElm) {
         document.getElementById("playbutton").innerHTML = "play"; // Set button text == Play
         audioElm.pause();
       }

       // Increment playbackRate by 1 
       function increaseSpeed() {
         audioElm.playbackRate += 1;
       }

       // Cut playback rate in half
       function decreaseSpeed() {
         if (audioElm.playbackRate <= 1) {
           var temp = audioElm.playbackRate;
           audioElm.playbackRate = (temp / 2); 
         } else {
           audioElm.playbackRate -= 1;
         }
       }

     </script>


</body>
</html>