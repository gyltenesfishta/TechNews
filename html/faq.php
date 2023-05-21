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
<html>
  <head>
    <meta charset="utf-8">
    <title>FAQ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel = "stylesheet" href = "../css/faq.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  <body style="background-color: #FFFDD0; font-family:  Arial, Helvetica, sans-serif;">
<?php include "header.php" ?>
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
      <p>Për momentin jo, por jemi duke punuar për të shtuar një funksion të tillë.</p>
    </div>

    <div class="col-md-6 col-lg-3 mb-4">
      <h6 class="mb-3 text-primary">A mund të përdor lajmet tuaja nëse dua të bëj ndonjë raport ose publikim për vete?</h6>
      <p>
        <strong>Sigurisht!</strong> Vetëm se duhet të cekësh instancën se për çfarë dhe ku do t'i përdorësh.
      </p>
    </div>
    <label class="form-label" for="textAreaExample" style="margin-left: 8%"><strong>Dëshironi të dini më shumë rreth nesh?</strong></label>
    <div class="col-md-10 col-lg-7 mb-4 form-outline" style = "margin-left: -34%;">
    <form class = "border shadow p-3 rounded" style="background-color: #c5b078;"action="faq-logic.php"  method="post">
  <textarea class="form-control" name="pyetja" id="textAreaExample1" rows="4"></textarea>
  <input type="submit" name="pyet" value="Pyet" class="btn btn-success" style = "margin-top: 10px;"></input>
  <?php if (isset($_GET['error'])) { ?>
  <div class="alert alert-danger" role="alert" style="margin-top: 10px;">
    <?= $_GET['error'] ?>
  </div>
<?php } else if (isset($_GET['success'])) { ?>
  <div class="alert alert-success" role="alert" style="margin-top: 10px;">
    <?= $_GET['success'] ?>
  </div>
<?php } ?>

  </from>
</div>
  </div>
</section>
<?php include "footer.php" ?>
<!--Section: FAQ-->
  </body>

</html>