<?php
    session_start();
    include "db_conn.php";
    $newId = $_GET['newId'];
    $sql = "SELECT * FROM articles WHERE id = '$newId'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
           $titulli = $row['titulli'];
           $permbajtja = $row['permbajtja'];
           $image_data = $row['fotoja'];
        }
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/lajmi.css">
        <title><?php echo $titulli; ?></title>
    </head>
  <?php include "header.php"; ?>
<body style = "font-family:  Arial, Helvetica, sans-serif;">
<img src="data:image/jpeg;base64,<?php echo base64_encode($image_data); ?>" class="foto" alt="Iphone 13 vs Iphone 14" style= "width: 1100px;">
    <div class="paragrafi" style= "margin-left: 120px;">
        <h2><?php echo $titulli; ?></h2>
        <br><br><br><br>
        <p><?php echo $permbajtja ?></p>
</div>
      <!--Merre id e lajmit ne te cilin gjendesh -->
      <form action="shto-lajmin-logic.php?newId=<?php echo $newId; ?>" method="post">
      <button class="btn" name="fshij" style = "margin-left: 45%;height: 50px;background-color: red;color: white;font-weight: bold;">Fshij lajmin</button>
</form>
   <?php include "footer.php"; ?>
 <script src="../js/index.js"></script>
</body>
</html>