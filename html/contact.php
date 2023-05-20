<?php 
session_start();
if (isset($_POST["login"])) {
  header("Location: login.php");
  exit();
}

if (isset($_POST["signup"])) {
  header("Location: signup.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/contact.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechNews.com - The latest news on Technology</title>
   
</head>
  <!-- Header -->
  <?php include "header.php"; ?>
  <body style = "font-family:  Arial, Helvetica, sans-serif;">
<div class="ekipa"> 
  <h1 class="h1ekipa">Ekipa jonë</h1>

  <p class="pekipa">Stafi ynë përbëhet nga një ekip <br> profesionistësh të përkushtuar.</p>
  <hr>
</div>

    <div class="info" style="margin-top:-1.2%">
    <img src="../images/leo.jpg" alt="Leutrim Hajdini" class="foto">
        <h1 class="header">Leutrim Hajdini - CEO</h1>
        <p class="pstaf">Email: leutrimhajdini63@gmail.com</p>
        <button id="butoniPerMesazhLeo">Message</button>
        <button id="butoni-thirrjeLeo">Call</button>
        <p class="numriLeo">Phone number: (+383)049-868-115</p>
    </div>
    
    <div class="info">

        <img src="../images/olti.jpg" alt="Olti Ademi" class="foto">
        <h1 class="header">Olti Ademi - Journalist</h1>
        <p class="pstaf">Email: oltiademi30@gmail.com</p>
        <button id="butoniPerMesazhOlti">Message</button>
        
        <p class="numriLeo">Phone number: (+383)048-804-494</p>
        <button id="butoni-thirrjeOlti">Call</button>
    </div>
  
    <div class="info">
        <img src ="../images/isma.jpg" alt="Isma Klinaku" class="foto">    
        <h1 class = "header">Isma Klinaku - Journalist</h1>
        <p class="pstaf">Email: ismaklinaku27@gmail.com</p>
        <button id="butoniPerMesazhIsma">Message</button>
        
        <p class="numriLeo">Phone Number: (+383)049-456-159</p>
        <button id="butoni-thirrjeIsma">Call</button>
    </div>
   
    <div class="info">
   
        <img src="../images/zana.jpg" alt="Zana Shabani" class="foto">
        <h1 class = "header">Zana Shabani - CFO</h1>
        <p class="pstaf">Email: zshabani392@gmail.com</p>
        <button id="butoniPerMesazhZana">Message</button>

        <p class="numriLeo">Phone Number: (+383)045-884-123</p>
        <button id="butoni-thirrjeZana">Call</button>
    </div>
    <div class="info">
    
        <img src="../images/gyltene.jpg" alt="Gyltene Sfishta" class="foto">
        <h1 class = "header">Gyltene Sfishta - Video Editor</h1>
        <p class="pstaf">Email: gyltene.sfishta@gmail.com</p>
        <button id="butoniPerMesazhGyltene">Message</button>

        <p class="numriLeo">Phone Number: (+383)045-544-123</p>
        <button id="butoni-thirrjeGyltene">Call</button>
        <audio src="../audio/ringing.mp3" id="sound"></audio>
    </div>
    <!-- Footer -->
    <?php include "footer.php"; ?>
                  <script>
                    $(document).ready(function() {
                  $("#submit").click(function() {
                    alert("You successfully signed up!");
                  });
                });
                  </script>

  <script src="../js/contact.js"></script>
    
</body>
</html>