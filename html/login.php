<?php
if($_SERVER["REQUEST_METHOD"] ==="POST"){
  $mysqli = require_once __DIR__ . "/../html/db_conn.php";
  $role = $mysqli->real_escape_string($_POST['role']);
  echo "Role selected: ".$role."<br>";
  $sql = sprintf("SELECT * FROM users WHERE username = '%s' AND role = '%s'",
                  $mysqli->real_escape_string($_POST['username']),
                  $role
                  );
  $result = $mysqli->query($sql);
  $user = $result->fetch_assoc();
  if($user){
    if(password_verify($_POST["password"], $user["password"]) && $role == $user["role"]){
      session_start();
      // save user data in session variables
      $_SESSION["user_id"] = $user["id"];
      $_SESSION["username"] = $user["username"];
      $_SESSION["role"] = $user["role"];
      $_SESSION["firstname"] = $user["firstname"];
      $_SESSION["lastname"] = $user["lastname"];
      $_SESSION["email"] = $user["email"];

      header("Location: index.php");
      exit;
    }else{
      header("Location: login.php?error=Invalid username or password");
      exit;
    }
    if($user["firstname"] == "leutrim"){
      session_start();
      $_SESSION["user_id"] = $user["id"];
        $_SESSION["username"] = $user["username"];
        $_SESSION["role"] = $user["role"];
        $_SESSION["firstname"] = $user["firstname"];
        $_SESSION["lastname"] = $user["lastname"];
        $_SESSION["email"] = $user["email"];
        
        header("Location: ../ceo/index.php");
        exit;
    }
  }
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class = "container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
<form class = "border shadow p-3 rounded" style="width: 450px;" method="post">
  <h1 class = "text-center p-1">Login</h1>
  <?php if (isset($_GET['error'])){ ?>
    <div class="alert alert-danger" role="alert">
        <?=$_GET['error']?>
</div>
 <?php } ?>
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name ="password" id="password">
  </div>
  <select class="form-select mb-3" name="role" aria-label="Default select example">
    <option value="User">User</option>
    <option value="Journalist">Journalist</option>

  </select>
  <button type="submit" class="btn btn-primary">Login</button>
  <p class="text-center mt-2">Not registered? <a href="signup.php">Sign up</a></p>
</form>
    </div>
</body>
</html>