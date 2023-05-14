<?php
session_start();
if((isset($_SESSION['user_id']))){
if ($_SESSION["role"] == "Journalist") {
    $_SESSION["nav_item"] = "Shto";
}
}
if(isset($_POST['logout'])) { 
    session_destroy(); 
    header("Location: index.php"); 
    exit();
}
if(isset($_POST['change_pw'])) {  
  header("Location: changePw.php"); 
  exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/profile.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark p-3 bg-primary" id="headerNav">
      <div class="container-fluid">

        <a class="navbar-brand d-block d-lg-none" href="#">
          <img src="/static_files/images/logos/logo_2_white.png" height="80" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class=" collapse navbar-collapse" id="navbarNavDropdown" style = "">
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
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style = "height: 130px;">
                <li><a class="dropdown-item" href="historiku.php">Arkiva</a></li>
                <li><a class="dropdown-item" href="marketing.php">Marketing</a></li>
               
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <?php if(isset($_SESSION["user_id"])){ 
echo '<img class="rounded-circle" alt="avatar1" src="../images/male-pfp.png" style="width: 50px; margin-right: 20px; cursor: hand;margin-right: 20px;" onclick="window.location.href=\'profile.php\'">';
      } else{
      } ?>
    </nav>
</header>
<section style="background-color: #eee;">
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="../images/male-pfp.png" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"><?php echo $_SESSION["firstname"] . " " . $_SESSION["lastname"]; ?></h5> 
            <p class="text-muted mb-1"><?php echo $_SESSION["role"]; ?></p>

          </div>
        </div>
        <div class="card mb-2 mb-lg-">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-globe fa-lg text-warning"></i>
                <p class="mb-0">https://mdbootstrap.com</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                <p class="mb-0">mdbootstrap</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                <p class="mb-0">@mdbootstrap</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                <p class="mb-0">@mdbootstrap</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-right ">
              <form  method="post">
              <button type="submit" name = "logout" class="btn btn-warning log_out_btn"  onclick = "window.location.href = 'login.php';"> Log out</button>
              </form>
              </li>

            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $_SESSION["firstname"] . " " . $_SESSION["lastname"]; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $_SESSION["email"] ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <?php if($_SESSION["username"] == "oltiademi"){ ?>
 
              <div class="col-sm-9">
                <p class="text-muted mb-0">(048) 804 494</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Password</p>
              </div>
              <div class="col-sm-9">
              <form  method="post">
              <button type="submit" name = "change_pw" class="btn btn-warning change_pw" > Change password</button>
              </form>
              </div>
            </div>
            <?php } ?>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4">Lajmet më të klikuara
                </p>
                <a href="3.3.html">Iphone</a>
                
                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                
                <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                
                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                
                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
               
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                </p>
                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
        <script src="..js/profile.js"></script>
</body>
</html>