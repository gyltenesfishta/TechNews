  <?php
  session_start();
  include "../html/db_conn.php";
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
    header("Location: ../change-info/changePw.php"); 
    exit();
  }
  if(isset($_POST['change_number'])) {  
    header("Location: ../change-info/change_number.php"); 
    exit();
  }
    if(isset($_POST['change_user'])) {  
      header("Location: ../change-info/change_user.php"); 
      exit();
  }
    if (isset($_POST['delete_acc'])) {
        echo "<script>
            if (confirm('Are you sure you want to delete your account? This action cannot be undone.')) {
                window.location.href = '../change-info/delete_user.php';
            } else {
                window.location.href = '../html/profile.php';
            }
        </script>";
    }
    if (isset($_POST['insert_photo'])) {
      $image = $_FILES['image']['tmp_name'];
      $image_data = file_get_contents($image);
      
      // Establish database connection and insert image data into BLOB column
      $conn = mysqli_connect('localhost:3307', 'root', '', 'my_db');
      $stmt = mysqli_prepare($conn,"UPDATE USERS SET image = ? WHERE id = ?");
      mysqli_stmt_bind_param($stmt, "si", $image_data, $_SESSION['user_id']);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
      mysqli_close($conn);
      $_SESSION["image"] = $image_data;
      
    }
    $image = $_SESSION["image"];
    if(isset($_POST['change_number'])) {  
      header("Location: ../change-info/change-number.php"); 
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
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
      <link href="../css/profile.css" rel="stylesheet">
      <title>Profili</title>
  </head>
  <body>
  <?php include "header.php"; ?>
  <section style="background-color: #eee;">
      <div class="row justify-content-center">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
            <?php if(isset($_SESSION["user_id"])){ 
            echo '<img class="rounded-circle" alt="avatar1" src="data:image/jpeg;base64,'.base64_encode($image).'" style="width: 150px; height: 150px" onclick="window.location.href=\'profile.php\'">';
            } else{

            } ?>
              <h5 class="my-3"><?php echo $_SESSION["firstname"] . " " . $_SESSION["lastname"]; ?></h5> 
              <form  method="post" enctype="multipart/form-data">
                <input type="file" class="custom-file-input" name="image" id="image" style="margin-left: -50px; ">
                <button type="submit" name = "insert_photo" class="btn btn-success" style="margin-left: 280px;margin-top: -60px; white-space: nowrap;">Shto foton</button>
                </form>

            </div>
          </div>
          <div class="card mb-2 mb-lg-5">
            <div class="card-body p-0">
              <ul class="list-group list-group-flush rounded-3">
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fas fa-globe fa-lg text-warning"></i>
                  <p class="mb-0"></p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                  <p class="mb-0"></p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-right ">
                <form  method="post">
                <button type="submit" name = "change_user" class="btn btn-success" style="margin-left:90%;white-space: nowrap;" onclick = "window.location.href = 'change_user.php';">Ndrysho përdoruesin</button>
                </form>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-right ">
                <form  method="post" action= "../change-info/delete_user.php">
                <button type="submit" name = "delete_acc" class="btn btn-danger" style="margin-left:345px;white-space: nowrap;"
                                 onclick="return confirm('Are you sure you want to delete your account? This action cannot be undone.')">Fshij llogarinë</button>
                </form>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-right ">
                <form  method="post">
                <button type="submit" name = "logout" class="btn btn-warning log_out_btn" style="margin-left:422px;white-space: nowrap; onclick = "window.location.href = 'index.php';"> Dil</button>
                </form>
                </li>
              </ul>
            </div>
          </div>
      </div>
      <div class="col-lg-7">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Emri</p>
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
                <p class="mb-0" style="margin-top: 20px;">Telefoni</p>
              </div>
 
              <div class="col-sm-9">
                <p class="text-muted mb-0"  style="margin-top: 20px;"><?php echo $_SESSION['user_number'] ?></p>
              </div>
            </div>
            <div class="col-sm-9">
              <form method="post">    
              <button type="submit" name = "change_number" class="btn btn-success change_pw" style="margin-left: 350px;white-space: nowrap; margin-top: -50px;">Ndrysho numrin</button>
            </form>
              </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0" style="margin-top: 10px;">Fjalëkalimi</p>
              </div>
              <div class="col-sm-9">
              <form method="post">    
              <button type="submit" name = "change_pw" class="btn btn-success change_pw">Ndrysho fjalëkalimin</button>
            </form>
              </div>
            </div>
            
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4">Lajmet më të klikuara
                </p>
                <p class="mt-4 mb-1" style="font-size: .77rem;"><a href="1.3.php">Pajisjet inteligjente bëhen rrezik hakerimi për
                                                                 shkak të politikave të dobëta të përditësimit</a></p>
                
                <p class="mt-4 mb-1" style="font-size: .77rem;"><a href="3.3.php">TikTok shpërndan etiketën e tij 'media e kontrolluar 
                                                                  nga shteti' në 40 vende të tjera</a></p>
                
                <p class="mt-4 mb-1" style="font-size: .77rem;"><a href="4.2.php"> Sensori biologjik lejon robotin të zbulojë erërat</a></p>
                
                <p class="mt-4 mb-1" style="font-size: .77rem;"><a href="3.2.php">Spiunazhi industrial: Si Kina nxjerr fshehtas sekretet teknologjike të Amerikës</a></p>
                
                <p class="mt-4 mb-1" style="font-size: .77rem;"><a href="2.1.php">Mira Murati, shqiptarja që udhëheqë operacione teknologjike  në kompani ndërkombëtare</a></p>
               
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
<?php include "footer.php"; ?>
        <script src="..js/profile.js"></script>
</body>
</html>