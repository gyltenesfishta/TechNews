<?php 
?>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark p-3 bg-primary" id="headerNav">
      <div class="container-fluid">
      <?php 
    if (!isset($_SESSION["user_id"])) {
    echo '<form method="post">
              <button type="submit" name="login" class="btn btn-warning" onclick="window.location.href = \'login.php\';">Login</button>
          </form>';
          echo '<form method="post">
              <button type="submit" name="signup" class="btn btn-warning" style="margin-left: 10px;" onclick="window.location.href = \'signup.php\';">Sign up</button>
          </form>';
    }
    ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
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
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="height: <?php echo (isset($_SESSION['role']) && $_SESSION['role'] == "Journalist") ? "240px" : "190px"; ?>">
              <li><a class="dropdown-item" href="historiku.php">Arkiva</a></li>
              <li><a class="dropdown-item" href="marketing.php">Marketing</a></li>
              <li><a class="dropdown-item" href="faq.php">FAQ</a></li>
              <?php
              if (isset($_SESSION['role']) && $_SESSION['role'] == "Gazetar") {
                
                echo '<li><a class="dropdown-item shto-item" href="shto-lajmin.php" style="background-color: dodgerblue;">Shto lajmin</a></li>';
                echo '<style> .dropdown-item:hover { background-color: black !important;}</style>';
              }
              ?>
            </ul>
          </li>
          </ul>
        </div>
      </div>
      <?php if(isset($_SESSION["user_id"]) && $_SESSION["user_id"] == 1 && isset($_SESSION['image'])){ 
        $image = $_SESSION['image'];
        echo '<p>Profili</p>';
            echo '<img class="rounded-circle" alt="avatar1" src="data:image/jpeg;base64,'.base64_encode($image).'" style="width: 50px;cursor: pointer;" onclick="window.location.href=\'../ceo/index.php\'">';
        } else if(isset($_SESSION["user_id"])){
          $image = $_SESSION['image'];
            echo '<p style = "margin-top: 20px; color: white; font-size: 25px; font-family: Arial; padding: 5px;">Profili</p>';
            echo '<img class="rounded-circle" alt="avatar1" src="data:image/jpeg;base64,'.base64_encode($image).'" style="width: 50px; height: 50px;cursor: pointer;" onclick="window.location.href=\'profile.php\'">';
    } 
      else{
      } ?>

    </nav>
</header>