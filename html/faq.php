<?php
session_start();
include "db_conn.php";
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
<html>
  <head>
    <meta charset="utf-8">
    <title>FAQ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel = "stylesheet" href = "faq.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  <body style="background-color: #C4AE78;">
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark p-3 bg-primary" id="headerNav">
      <div class="container-fluid">
      <?php 
    if (!isset($_SESSION["user_id"])) {
    echo '<form method="post">
              <button type="submit" name="login" class="btn btn-warning" onclick="window.location.href = \'login.php\';">Login</button>
          </form>';
          echo '<form method="post">
              <button type="submit" name="signup" class="btn btn-warning" onclick="window.location.href = \'signup.php\';">Sign up</button>
          </form>';
                    }?>
        <a class="navbar-brand d-block d-lg-none" >
          <img src="/static_files/images/logos/logo_2_white.png" height="80" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class=" collapse navbar-collapse" id="navbarNavDropdown" style = "margin-left: -17px;">
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
              <?php if (isset($_SESSION['user_id'])) { ?>
              <ul class="dropdown-menu"  aria-labelledby="navbarDropdownMenuLink" style = "height: 190px;">
                <li><a class="dropdown-item" href="historiku.php">Arkiva</a></li>
                <li><a class="dropdown-item" href="marketing.php">Marketing</a></li>
                <li><a class="dropdown-item" href="faq.php">FAQ</a></li>
                <li><a class="dropdown-item" href="#"><?php echo $_SESSION['nav-item']; ?></a></li>
                <?php } else{ ?>
                  <ul class="dropdown-menu"  aria-labelledby="navbarDropdownMenuLink" style = "height: 130px;">
                <li><a class="dropdown-item" href="historiku.php">Arkiva</a></li>
                <li><a class="dropdown-item" href="marketing.php">Marketing</a></li>
                <li><a class="dropdown-item" href="faq.php">FAQ</a></li>
                <?php } ?>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <?php 
  if(isset($_SESSION["user_id"]) && $_SESSION["user_id"] == 1){ 
    echo '<img class="rounded-circle" alt="avatar1" src="data:image/jpeg;base64,' . base64_encode($_SESSION['image']) . '" style="width: 50px; margin-right: 20px; cursor: hand;margin-right: 20px;" onclick="window.location.href=\'../ceo/index.php\'">';
  } 
  else if(isset($_SESSION["user_id"])){
    echo '<img class="rounded-circle" alt="avatar1" src="data:image/jpeg;base64,'.base64_encode($_SESSION['image']).'" style="width: 50px; height: 50px; margin-right: 20px; cursor: hand;margin-right: 20px;" onclick="window.location.href=\'profile.php\'">';
  } 
  else{
  } 
        ?>
    </nav>
</header>
    <!--Section: FAQ-->
<section>
  <h3 class="text-center mb-4 pb-2 text-primary fw-bold">FAQ</h3>
  <p class="text-center mb-5">
      Gjeni përgjigjet rreth pyetjeve që njerëzit kanë bërë më së shpeshti në lidhje me gazetën.
</p>

  <div class="row justify-content-center no-gutters">
    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary">Çfarë lloj lajmesh raportoni?</h6>
      <p>
         Bëjmë raportimin e të gjitha lajmeve që kanë lidhje me teknologji dhe gjithqka që përdor
         teknologji, qofshin ato rrjete social, mjete teknologjike makina etj.
      </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary">Ku mund të kem qasje në gazetë?</h6>
      <p>
        Përveç uebfaqes, gazeta është e lirë për instalim edhe në App Store në IOS dhe 
          në Play Store në Android.
      </p>
    </div>

    <div class="col-md-6 col-lg-3 mb-4">
      <h6 class="mb-3 text-primary">Sa janë të besueshme lajmet?</h6>
      <p>
        Lajmet janë <strong>100%</strong> të besueshme sepse merren nga burime të përshtatshme dhe të besueshme 
        që janë në terren 24/7.
      </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary">A mund të blejë produkte të teknologjisë nga ju?</h6>
      <p>
        Jo, për momentin nuk e kemi atë funksion.
    </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary">A mund të sugjerojë dhe të dërgojë ndonjë lajm për ju?</h6>
      <p><strong><u>Unfortunately no</u>.</strong> We do not issue full or partial refunds for any
        reason.</p>
    </div>

    <div class="col-md-6 col-lg-3 mb-4">
      <h6 class="mb-3 text-primary"> Another
        question that is longer than usual</h6>
      <p>
        Of course! We’re happy to offer a free plan to anyone who wants to try our service.
      </p>
    </div>
    <label class="form-label" for="textAreaExample" style="margin-left: 8%"><strong>Dëshiron të dish më shumë rreth nesh?</strong></label>
    <div class="col-md-10 col-lg-7 mb-4 form-outline" style = "margin-left: -34%;">
    <form class = "border shadow p-3 rounded" action="faq-logic.php"  method="post">
  <textarea class="form-control" name="pyetja" id="textAreaExample1" rows="4"></textarea>
  <button type="button" name="pyet" class="btn btn-success" style = "margin-top: 10px;">Pyet</button>
  <?php if (isset($_GET['error'])){ ?>
          <div class="alert alert-danger" role="alert">
              <?=$_GET['error']?>
              </div>
              <?php } ?>
  </from>
</div>
  </div>
</section>
<!--Section: FAQ-->
  </body>

</html>