<?php
session_start();
if ($_SESSION['role'] == "Journalist"){
  $_SESSION['nav-item'] = "Shto";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="faq.css">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechNews.com - Lajmet e fundit nga teknologjia</title>
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark p-3 bg-primary" id="headerNav">
      <div class="container-fluid">

        <a class="navbar-brand d-block d-lg-none" href="#">
          <img src="/static_files/images/logos/logo_2_white.png" height="80" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class=" collapse navbar-collapse" id="navbarNavDropdown" style = "margin-left: -230px;">
          <ul class="navbar-nav mx-auto">
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
              <?php if ($_SESSION['role'] == "Journalist") { ?>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style = "height: 240px;">
                <li><a class="dropdown-item" href="historiku.php">Arkiva</a></li>
                <li><a class="dropdown-item" href="marketing.php">Marketing</a></li>
                <li><a class="dropdown-item" href="faq.php">FAQ</a></li>
                <li><a class="dropdown-item" href="#"><?php echo $_SESSION['nav-item']; ?></a></li>
                <?php } else{ ?>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style = "height: 185px;">
                <li><a class="dropdown-item" href="historiku.php">Arkiva</a></li>
                <li><a class="dropdown-item" href="marketing.php">Marketing</a></li>
                <li><a class="dropdown-item" href="faq.php">FAQ</a></li>
                <?php } ?>
              </ul>
            </li>
          </ul>
        </div>
      </div>  
      <img class="rounded-circle" alt="avatar1" src="../images/male-pfp.png" style="width: 50px; margin-right: 20px; cursor: hand;margin-right: 20px;" onclick = "window.location.href = 'profile.php'">

    </nav>
</header>
<body>
    <div class="box">
  <h2 class="title">24/7 access to TechNews  </h2>
  <hr>
  <p class="text">Merrni gjithmonë më shumë nga historitë, lajmet e fundit dhe akses të pakufizuar në video, 
    galeri fotografish, baza të të dhënave të dokumenteve publike dhe më shumë të disponueshme në desktopin tuaj,
     pajisjet celulare dhe aplikacionin tonë celular.Shkarkoni aplikacionin tonë përmes dyqanit tuaj Apple ose Google Play 
     për të personalizuar sinjalizimet tuaja të lajmeve, rrëshqitni dhe lëvizni nëpër histori më shpejt
      dhe shënoni ato për t'i ruajtur dhe lexuar më vonë.</p>
</div>
<div class="box">
 <h2 class="title"> The eNewspaper</h2>
 <hr>
 <p> Një kopje e saktë dixhitale e botimit të printuar, është në dispozicion herët në mëngjes. Gazeta elektronike ju lejon të ktheni faqe, të ruani dhe shkarkoni artikuj, të zgjidhni enigma,
   të dëgjoni artikuj të lexuar me zë të lartë dhe më shumë!</p>
</div>
<div class="box">
  <hr>
 <h2 class="title"> A ka ndonjë mënyrë për të hyrë në përmbajtjen tuaj nëse nuk jam abonentë</h2>
 <p> Jo-abonentët do të kenë qasje në përmbajtje të kufizuar. Faqja kryesore e faqes sonë online, faqet e para të seksioneve 
  dhe produktet reklamuese do të mbeten të aksesueshme për këdo, edhe pa një abonim. Disa përmbajtje janë caktuar vetëm për abonentët.
   </p>
</div>
<hr>
<form>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputname3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="inputname3" placeholder="Name">
    </div>
    </div>
    <div class="form-group row">
    <label for="inputquestion" class="col-sm-2 col-form-label">Ask a question</label>
    <div class="col-sm-10">
      <input type="question" class="form-control" id="inputquestion3" placeholder="Question">
    </div>
  </div>
     <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>





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




</body>
</html>



