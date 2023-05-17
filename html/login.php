<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Kyqu</title>
</head>
<body>
    <div class = "container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
<form class = "border shadow p-3 rounded" style="width: 450px;" action="login-check.php" method="post">
  <h1 class = "text-center p-1">Kyqu</h1>
  <?php if (isset($_GET['error'])){ ?>
    <div class="alert alert-danger" role="alert">
        <?=$_GET['error']?>
</div>
 <?php } ?>
  <div class="mb-3">
    <label for="username" class="form-label">Përdoruesi</label>
    <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Fjalëkalimi</label>
    <input type="password" class="form-control" name ="password" id="password">
  </div>
  <select class="form-select mb-3" name="role" aria-label="Default select example">
    <option value="Përdorues">Përdorues</option>
    <option value="Gazetar">Gazetar</option>

  </select>
  <button type="submit" class="btn btn-primary">Kyqu</button>
  <p class="text-center mt-2">Nuk je i regjistruar? <a href="signup.php">Regjistrohu</a></p>
</form>
    </div>
</body>
</html>