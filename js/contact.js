document.getElementById("butoniPerMesazhOlti").addEventListener("click", function(){
   window.location.href = "https://mail.google.com/mail/?view=cm&fs=1&to=oltiademi30@gmail.com";
});
document.getElementById("butoniPerMesazhLeo").addEventListener("click", function(){
   window.location.href = "https://mail.google.com/mail/?view=cm&fs=1&to=leutrimhajdini63@gmail.com";
});
document.getElementById("butoniPerMesazhIsma").addEventListener("click", function(){
   window.location.href = "https://mail.google.com/mail/?view=cm&fs=1&to=ismaklinaku27@gmail.com";
});
document.getElementById("butoniPerMesazhZana").addEventListener("click", function(){
   window.location.href = "https://mail.google.com/mail/?view=cm&fs=1&to=zshabani392@gmail.com";
});
document.getElementById("butoniPerMesazhGyltene").addEventListener("click", function(){
   window.location.href = "https://mail.google.com/mail/?view=cm&fs=1&to=gyltene.sfishta@gmail.com";
});
let playButton1 = document.getElementById("butoni-thirrjeOlti");
let audio1 = document.getElementById("sound");

playButton1.addEventListener("click", function() {
  if(playButton1.textContent==="Call"){
   playButton1.textContent="End Call";
   audio1.play();}
   else{
      playButton1.textContent="Call";
      audio1.pause();
      audio1.currentTime = 0;
   }
});
let playButton2 = document.getElementById("butoni-thirrjeLeo");
let audio2 = document.getElementById("sound");

playButton2.addEventListener("click", function() {
  if(playButton2.textContent==="Call"){
   playButton2.textContent="End Call";
   audio2.play();}
   else{
      playButton2.textContent="Call";
      audio2.pause();
      audio2.currentTime = 0;
   }
});
let playButton3 = document.getElementById("butoni-thirrjeIsma");
let audio3 = document.getElementById("sound");

playButton3.addEventListener("click", function() {
  if(playButton3.textContent==="Call"){
   playButton3.textContent="End Call";
   audio3.play();}
   else{
      playButton3.textContent="Call";
      audio3.pause();
      audio3.currentTime = 0;
   }
});
let playButton4 = document.getElementById("butoni-thirrjeZana");
let audio4 = document.getElementById("sound");

playButton4.addEventListener("click", function() {
  if(playButton4.textContent==="Call"){
   playButton4.textContent="End Call";
   audio4.play();}
   else{
      playButton4.textContent="Call";
      audio4.pause();
      audio4.currentTime = 0;
   }
});
let playButton5 = document.getElementById("butoni-thirrjeGyltene");
let audio5 = document.getElementById("sound");

playButton5.addEventListener("click", function() {
  if(playButton5.textContent==="Call"){
   playButton5.textContent="End Call";
   audio5.play();}
   else{
      playButton5.textContent="Call";
      audio5.pause();
      audio5.currentTime = 0;
   }
});
 

$(document).ready(function() {
   $("#submit").click(function() {
     alert("You successfully signed up!");
   });
 });