const button = document.getElementById("butoniPerMesazhOlti");
button.addEventListener("click", function(){
    const recipient = "oltiademi30@gmail.com";
    const gmailComposeUrl = https://mail.google.com/mail/?view=cm&fs=1&to=${recipient};
    window.location.href = gmailComposeUrl;
});