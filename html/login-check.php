<?php 
    include "db_conn.php";
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    
    
    if (empty($username)) {
        header("Location: signup.php?error=Username is required");
    }else if (empty($role)) {
        header("Location: signup.php?error=Role is required");
    }else if (empty($password)) {
        header("Location: signup.php?error=Password is required");
    } else {
        $sql = "SELECT * FROM users WHERE username = '$username' and role = '$role'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            
            // Hash the input password with the salt from the database
            $hashed_password = hash('sha256', $row['salt'] . $password);

            // Compare the hashed passwords
            if ($hashed_password === $row['hashed_password']) {
                session_start();
                // save user data in session variables
                $_SESSION["user_id"] = $row["id"];
                $_SESSION["username"] = $row["username"];
                $_SESSION["role"] = $row["role"];
                $_SESSION["password"] = $row["hashed_password"];
                $_SESSION["firstname"] = $row["firstname"];
                $_SESSION["lastname"] = $row["lastname"];
                $_SESSION["email"] = $row["email"];
                $_SESSION["image"] = $row["image"];
                $_SESSION['user_number'] = $row['number'];

                setcookie("username", $_SESSION["username"], (time() + 30 * 24 * 60 * 60));
                setcookie("password", $_SESSION["password"], (time() + 30 * 24 * 60 * 60));

                header("Location: index.php");
                exit;
                
                if($row["email"] == "leutrimhajdini63@gmail.com"){ 
                    session_start();
                      $_SESSION["user_id"] = $row["id"];
                      $_SESSION["username"] = $row["username"];
                      $_SESSION["role"] = $row["role"];
                      $_SESSION["firstname"] = $row["firstname"];
                      $_SESSION["lastname"] = $row["lastname"];
                      $_SESSION["email"] = $row["email"];
                      header("Location: /../ceo/index.php");
                      exit;
                  }
            } else {
                // Passwords don't match, show error
                header("Location: login.php?error=Invalid login credentials");
                exit();
            }
        } else {
            // User not found, show error
            header("Location: login.php?error=Invalid login credentials");
            exit();
        }
    }
} else {
    header("Location: login.php");
    exit();
}
?>