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
<header>
    <nav class="navbar navbar-expand-lg navbar-dark p-3 bg-primary" id="headerNav">
      <div class="container-fluid">
      <?php 
if (!isset($_SESSION["user_id"])) {
    echo '<form method="post">
    <button type="submit" name="login" class="btn btn-warning" style = "position: relative; margin-top: -1px; margin-left: 5px;" onclick="window.location.href = \'login.php\';">Login</button>
    </form>';
          echo '<form method="post">
          <button type="submit" name="signup" class="btn btn-warning" style = "position: absolute; margin-left: 5px; margin-top: -18px;" onclick="window.location.href = \'signup.php\';">Sign up</button>
          </form>';
}
?>
        <a class="navbar-brand d-block d-lg-none" href="#">
          <img src="/static_files/images/logos/logo_2_white.png" height="80" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
     
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mx-auto ">
            <li class="nav-item">
              <a class="nav-link mx-2" aria-current="page" href="index.php">Ballina</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="contact.php">Kontaktet</a>
            </li>
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link mx-2" href="index.php">
                <img src="../images/Tech-News.png" height="45px" width="200px" class="logo" />
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="news.php">Lajmet</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
  
                Më shumë
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="historiku.php">Arkiva</a></li>
                <li><a class="dropdown-item" href="marketing.php">Marketing</a></li>

              </ul>
            </li>
          </ul>
        </div>
      </div>
      <?php if(isset($_SESSION["user_id"]) && $_SESSION["user_id"] == 1){ 
      echo '<img class="rounded-circle" alt="avatar1" src="../images/male-pfp.png" style="width: 50px; margin-right: 20px; cursor: hand;margin-right: 20px;" onclick="window.location.href=\'../ceo/index.php\'">';
      } else if(isset($_SESSION["user_id"])){
        echo '<img class="rounded-circle" alt="avatar1" src="../images/male-pfp.png" style="width: 50px; margin-right: 20px; cursor: hand;margin-right: 20px;" onclick="window.location.href=\'profile.php\'">';
      } 
      else{
      } ?>

    </nav>
  </header>


<body>
    <div class="lajmet">
        <span class="lajmet12">
        <div class="lajmi1">
        
        <img src="../images/iPhone-14-vs.-iPhone-13-The-biggest-differences.jpg" class="foto1" alt="Iphone 13 vs Iphone 14" id="text_a">
        <h2 class="hlajmi1"><a href="/html/1.1.html">Krahasimi i shkëlqyeshëm: iPhone 13 VS iPhone 14, <br>cili ia vlen?</a></h2><p class="plajmi1">Për herë të parë ndonjëherë, iPhone 14 i ri përdor të njëjtin procesor si modeli i mëparshëm, dhe kur shtoni kamerat kryesisht të pandryshuara dhe dizajnin shumë të ngjashëm, Apple mund ta ketë quajtur këtë iPhone 13S.
          Është e rëndësishme të dini se në të kaluarën, Apple bëri ndryshime më të mëdha në iPhone-in e saj të ri çdo vit, dhe kjo është arsyeja pse iPhone 14 ndihet ndryshe...</p> 
        </div>
        <hr>
        <div class="lajmi2">
            <img  src="../images/coding.jpg" class="foto" alt="Coding">
            <h6 class="hlajmi2"><a href="/html/1.2.html" id="text_a">A po ndihmojnë platformat e Low Code në zgjidhjen e krizës së aftësive?</a></h6>
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
            <td ><a href="2.html">2</a></td>
            <td ><a href="3.html"> 3</a></td>
            <td ><a href="4.html"> 4</a></td>
        </tr>
        
        
    </table>
</div>   
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>TECH NEWS</h6>
          <p>
            Gazeta më e saktë në lidhje me lajmet nga teknologjia
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="https://www.nvidia.com/en-eu/geforce/" target="_blank" class="text-reset">Nvidia</a>
          </p>
          <p>
            <a href="https://www.intel.com/content/www/us/en/homepage.html" target="_blank" class="text-reset">Intel</a>
          </p>
          <p>
            <a href="https://www.amd.com/en" target="_blank" class="text-reset">Radeon</a>
          </p>
          <p>
            <a href="https://www.apple.com/iphone/?cid=oas-us-domains-iphone.com" target="_blank" class="text-reset">Iphone</a>
          </p>
          <p>
              <a href="https://www.samsung.com/countryselection/" target="_blank" class="text-reset">Samsung</a>
            </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Social Media Links
          </h6>
          <p>
            <a href="https://www.instagram.com/technews.ks/" class="text-reset" target="_blank">Instagram</a>
          </p>
          <p>
            <a href="https://www.facebook.com/profile.php?id=100089618740443" class="text-reset" target="_blank">Facebook</a>
          </p>
          <p>
            <a href="technews.com" class="text-reset" target="_blank">Google</a>
          </p>
          <p>
            <a href="https://www.linkedin.com/in/tech-news-50a034263/" class="text-reset" target="_blank">LinkedIn</a>
          </p>
          
         
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p>Prishtinë, PR 10130, KS</p>
          <p>
            <a href="mailto:technews@gmail.com">
            technews@gmail.com</a>
          </p>
          <p></i>(+383)234 567 88</p>
          <p>(+383)234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <div class="subscribe_footer">
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="">TechNews.com</a>
  </div>
  <!-- Copyright -->
</footer>
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