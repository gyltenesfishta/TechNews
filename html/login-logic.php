<?php
$mysqli = require __DIR__ . "../db_conn.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    if(empty($username)){
        header("Location: login.php?error=Username is required");
        exit;
    }else if(empty($password)){
        header("Location: login.php?error=Password is required");
        exit;
    }else{
        $sql = sprintf("SELECT * FROM users WHERE username = '%s'",
            $mysqli->real_escape_string($username));
            $result = $mysqli->query($sql);

        if($result->num_rows == 1){
            $user = $result->fetch_assoc();

            if(password_verify($password, $user["password"])){
                header("Location: olti.php");
                exit;
                
            }
        
        }

        header("Location: login.php?error=Invalid username or password");
        exit;
    }
}
?>
