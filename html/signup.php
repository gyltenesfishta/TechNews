<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
    <style>
      label{
        color: blue;
      }
    </style>
</head>
<body>
    <div class = "container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
<form class = "border shadow p-3 rounded" style="width: 550px;" action="signup-logic.php" method="post">
  <h1 class = "text-center p-1">Sign up</h1>
  <?php if (isset($_GET['error'])){ ?>
    <div class="alert alert-danger" role="alert">
        <?=$_GET['error']?>
</div>
 <?php } ?>
 <div class="mb-3 row">
  <div class="col">
    <label for="username" class="form-label">First Name</label>
    <input type="text" class="form-control" name="firstname" id="firstname" >
  </div>
  </div>
  <div class="mb-3 row">
    <div class = "col">
    <label for="username" class="form-label">Last Name</label>
    <input type="text" class="form-control" name="lastname" id="username" >
  </div>
  </div>
  <label for="role" class="form-label">Role</label>
  <select class="form-select mb-3" name="role" aria-label="Default select example">
    <option value="1">User</option>
    <option value="2">Journalist</option>
  </select>
  <div class="mb-3">
    <label for="username" class="form-label">Email</label>
    <input type="text" class="form-control" name="email" id="username" >
  </div>
  <div class="mb-3">
    <label for="username" class="form-label">Confirm your email</label>
    <input type="text" class="form-control" name="confirm_email" id="username" >
  </div>
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" name="username" id="username" >
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name ="password" id="password">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Confirm your Password</label>
    <input type="password" class="form-control" name ="confirm_password" id="password">
  </div>
  <button type="submit" class="btn btn-primary">Sign up</button>
</form>
    </div>
</body>
</html>