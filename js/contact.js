document.getElementById("butoniPerMesazhOlti").addEventListener("click", function(){
    window.location.href = "https://mail.google.com/mail/?view=cm&fs=1&to=oltiademi30@gmail.com";
 });
 document.getElementById("butoniPerMesazhLeo").addEventListener("click", function(){
    window.location.href = "https://mail.google.com/mail/?view=cm&fs=1&to=leutrimhajdini63@gmail.com";
 });
const btn = document.getElementById("butoni-thirrjeOlti");
btn.addEventListener("click", function(){
    
     if(btn.textContent==="End Call"){
       btn.textContent="Call";
    }
    else{
        btn.textContent="End Call";
       
    }
 });
 

 