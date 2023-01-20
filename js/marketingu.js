$(document).ready(function() {
    $("#submit").click(function() {
      alert("You successfully signed up!");
    });
  });
  $(navbarDropdownMenuLink).ready(function() {
     $('.dropdown-toggle').dropdown()
   });
   
   var button = document.getElementById("butoni");
   var resultContainer = document.getElementById("result");

   button.addEventListener("click", function() {
       
       var userText = prompt("Jepni Emrin, Mbiemrin dhe email-in (Emri,Mbiemri,email-i):");
       
       if(userText !=null){
         resultContainer.innerHTML = userText;
       }
   });