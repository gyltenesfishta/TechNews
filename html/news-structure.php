<?php
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
?>


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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

        <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
    
          
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          
        <link rel="stylesheet" href="../css/lajmi.css">
        
        <title>TechNews.com - Pajisjet inteligjente bëhen rrezik hakerimi për shkak të politikave të dobëta të përditësimit</title>
    </head>
  <?php include "header.php"; ?>
<body>
<img src="data:image/jpeg;base64,<?php echo base64_encode($image_data); ?>" class="foto" alt="Iphone 13 vs Iphone 14">
    <div class="paragrafi">
        <h2><?php echo $titulli; ?></h2>
        <br><br><br><br>
        <p><?php echo $permbajtja ?></p>
    
    <nav aria-label="Page navigation">
      <ul class="pagination">
          <a href="1.2.html" aria-label="Next" style="margin-left: 1100px">
            <span aria-hidden="true">Next <i class="fa fa-chevron-right" aria-hidden="true"></i></span>
          </a>
        </li>
      </ul>
    </nav> 
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