<?php 
session_start();
if(isset($_POST['logout'])) { 
  session_destroy();
  header("Location: ../html/index.php"); 
  exit(); 
}
if(isset($_POST['change_pw'])) {  
  header("Location: changePww.php"); 
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Leutrim Hajdini - Lista e punëtorëve</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>



    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    


    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
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
              <?php if (isset($_SESSION['user_id'])) { ?>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style = "height: 240px;">
                <li><a class="dropdown-item" href="historiku.php">Arkiva</a></li>
                <li><a class="dropdown-item" href="marketing.php">Marketing</a></li>
                <li><a class="dropdown-item" href="../html/faq">FAQ</a></li>
                <li><a class="dropdown-item" href="../html/twitter.php">Twitter</a></li>

                <?php } else{ ?>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style = "height: 130px;">
                <li><a class="dropdown-item" href="historiku.php">Arkiva</a></li>
                <li><a class="dropdown-item" href="marketing.php">Marketing</a></li>
                <?php } ?>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <?php if(isset($_SESSION["user_id"]) && $_SESSION["user_id"] == 1){ 
echo '<img class="rounded-circle" alt="avatar1" src="../images/Leoo.jpg" style="width: 50px; margin-right: 20px; cursor: pointer;margin-right: 20px;" onclick="window.location.href=\'../ceo/index.php\'">';
      } else if(isset($_SESSION["user_id"])){
        echo '<img class="rounded-circle" alt="avatar1" src="../images/male-pfp.png" style="width: 50px; margin-right: 20px; cursor: pointer;margin-right: 20px;" onclick="window.location.href=\'profile.php\'">';
      } 
      else{
      } ?>
    </nav>
</header>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
         <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                
                <div class="sidebar-brand-text mx-3">Leutrim Hajdini</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Fillimi</span></a>
            </li>           

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Grafiku</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Lista e punëtorëve</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <div class="col-sm-0.1 nav-item">
            <form  method="post">
            <button name = "change_pw" class="btn-danger change_pw" style="           
            display: inline-block;
            margin-left: 33px;
            margin-right: 2%;
            margin-top: 270px;
            padding: 10px 8px;
            font-size: 15px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            border-radius: 10px;
            background-color: #FF0000; /* Yellow color */
            color: #111; /* Text color */
            border: none;
            cursor: pointer;"
            >Change password</button>
            </form>
            </div>
            <form  method="post">
            <button type="submit" name = "logout" class="btn btn-warning log_out_btn nav-item"  onclick = "window.location.href = 'login.php';" style="
            display: inline-block;
            margin-left: 50px;
            margin-top: 20px;
            padding: 10px 15px;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            border-radius: 10px;
            background-color: #f0c14b; /* Yellow color */
            color: #111; /* Text color */
            border: none;
            cursor: pointer;"
            >Log out</button>
            </form>

            </ul>

            
                    <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>


                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tabela</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Lista e punëtorëve</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Emri</th>
                                            <th>Mbiemri</th>
                                            <th>Pozita</th>
                                            <th>Mosha</th>
                                            <th>Data e fillimit</th>
                                            <th>Rroga</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                          $mysqli = require_once __DIR__ . "/../html/db_conn.php";
                                          $sql = "SELECT * FROM punetori";
                                          $result = $mysqli->query($sql);

                                         
                                          while( $user = $result->fetch_assoc()){
                                            echo "<tr>";
                                            echo "<td>" . $user["firstname"] . "</td>";
                                            echo "<td>" . $user["lastname"] . "</td>";
                                            echo "<td>" . $user["pozita"] . "</td>";
                                            echo "<td>" . $user["mosha"] . "</td>";
                                            echo "<td>" . $user["koha_fillimit"] . "</td>";
                                            echo "<td>" . $user["rroga"] . " €" . "</td>";
                                            
                                            echo "</tr>";
                                          }
                                       
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>