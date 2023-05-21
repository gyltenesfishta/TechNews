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
   <link rel="stylesheet" href="../css/marketing.css">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketing</title>
</head>
<body style = "font-family:  Arial, Helvetica, sans-serif;">
<?php include "header.php" ?>
      <div class="container">
      <video width="100%" height="500px" loop autoplay>
        <source src="../videos/video.mp4" type="video/mp4">
      </video>
      </div>
      <div class="teksti">
        <p>Reklamoni brendin tuaj</p>
      </div>
      <div id="result"></div>
      
      <div class="paragrafi">
        <p class="teksti1">Sot, reklamimi është dinamik më shumë se kurrë më parë. Për biznesin tuaj më nuk mjafton vetëm prezenca në internet. Zhvillimi i platformave të shumta për komunikim ka bërë që komunikimi me konsumatorët tuaj dhe ata potencial të jetë më kompleks. Të gjitha këto, në të njëjtën kohë kanë bërë që ne të lansojmë produkte të reja të cilat do ta lehtësojnë jetën tuaj. Do ta ndihmojnë dhe do ta ngrisin në nivel më të lartë brendin tuaj. Ne bizneseve nuk ju ofrojmë vetëm hapësira reklamuese, por edhe të dhëna, statistika të cilat do të ju ndihmojnë që t’i arrini objektivat tuaja, të krijoni raporte dhe ndërveprim më të afërt me klientët tuaj. Gjithmonë kemi qenë dhe jemi lider në këtë industri.</p>
      </div>
      <h4 style="margin-left: 15%"><b>Na kontaktoni në E-Mailin tonë: technews@gmail.com ose në numrin e telefonit: (+383)234 567 88</b></h4>

      <?php include "footer.php"; ?>
     
</body>
</html>