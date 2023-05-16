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
    <link rel="stylesheet" href="../css/news.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechNews.com - The latest news on Technology</title>

    <style>
      img{
        border-radius: 10px;
      }
    </style>
</head>
<?php include "header.php" ?>

<body>
    <div class="lajmet">
        <span class="lajmet12">
        <div class="lajmi1">
        
        <img src="../images/iPhone-14-vs.-iPhone-13-The-biggest-differences.jpg" class="foto1" alt="Iphone 13 vs Iphone 14" id="text_a">
        <h2 class="hlajmi1"><a href="news-structure.php?newId=1">Krahasimi i shkëlqyeshëm: iPhone 13 VS iPhone 14, <br>cili ia vlen?</a></h2><p class="plajmi1">Për herë të parë ndonjëherë, iPhone 14 i ri përdor të njëjtin procesor si modeli i mëparshëm, dhe kur shtoni kamerat kryesisht të pandryshuara dhe dizajnin shumë të ngjashëm, Apple mund ta ketë quajtur këtë iPhone 13S.
          Është e rëndësishme të dini se në të kaluarën, Apple bëri ndryshime më të mëdha në iPhone-in e saj të ri çdo vit, dhe kjo është arsyeja pse iPhone 14 ndihet ndryshe...</p> 
        </div>
        <hr>
        <div class="lajmi2">
            <img  src="../images/coding.jpg" class="foto" alt="Coding">
            <h6 class="hlajmi2"><a href="news-structure.php?newId=2" id="text_a">A po ndihmojnë platformat e Low Code në zgjidhjen e krizës së aftësive?</a></h6>
            <p class="plajmi2"> Platformat që lejojnë përdoruesit e thjeshtë të krijojnë aplikacione, të përpunojnë 
              <br>të dhëna dhe madje të kryejnë mësimin e makinerive me kod 
              <br>minimal ose pa kod janë në rritje. A mund ta...
         </div>        
         <hr>
        </span>
        <div class="lajmet34">
         <div class="lajmi3">
        <img src="../images/smart-home2.jpg" class="foto" alt="Smart Device">
        <h6 class="hlajmi3"><a href="1.3.html" id="text_a">Pajisjet inteligjente bëhen rrezik hakerimi për shkak të politikave të dobëta të përditësimit</a></h6>
        <p class="plajmi3">Pajisjet inteligjente si makinat larëse dhe televizorët rrezikojnë të humbasin
          <br> veçoritë dhe funksionalitetin kryesor në vetëm dy vjet, hulumtimi
          <br> ka zbuluar. Firma analizoi produktet duke... 

          </p>
         </div>
         <hr>
         <div class="lajmi4"></div>
         </div>
    </div>



<div class="tabelat">
    <table border="1">
        <tr>
            <td ><a href="#">1</a></td>
            <td ><a href="2.php">2</a></td>
            <td ><a href="3.php"> 3</a></td>
            <td ><a href="4.php"> 4</a></td>
        </tr>
        
        
    </table>
</div>   
      <?php include "footer.php"; ?>
              <script>
                $(document).ready(function() {
              $("#submit").click(function() {
                alert("You successfully signed up!");
              });
            });
              </script>
<script src="../js/index.js">

</script>
</body>
</html>