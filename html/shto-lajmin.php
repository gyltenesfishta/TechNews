<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href = "../css/shto-lajmin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shto lajmin</title>
</head>
<?php include "header.php"; ?>

<body style = "font-family:  Arial, Helvetica, sans-serif;">
<form method="post" action="shto-lajmin-logic.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1" style = "padding-bottom: 10px; width: 50px; font-size: 30px; ">Titulli</label>
    <input type="text" name="titulli" class="form-control" id="exampleInputEmail1" aria-describedby="titulli" required style= "border-style: inset #000000; background-color: #F0FFF0; ">
    <label for="exampleFormControlTextarea1" style = "padding-bottom: 10px; width: 50px; font-size: 30px; padding-top: 20px;">Përmbajtja</label>
    <textarea class="form-control" name="permbajtja" id="exampleFormControlTextarea1" rows="25" required style= "border-style: inset #000000; background-color:#F0FFF0;"></textarea>
    <input type="file" name="articleImage" class="form-control-file" id="exampleFormControlFile1" style="padding: 20px 0px 20px 0px;"><br>
    <input type="submit" name="shto-lajmin" class="btn" style="white-space: nowrap; color: white; background-color: green; height: 40px; font-weight: bold;" value="Shto lajmin">
  </div>
</form>
<?php include "footer.php"; ?>
</body>
</html>