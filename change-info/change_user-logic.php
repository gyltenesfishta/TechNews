<?php 
    session_start();
    include "../html/db_conn.php";
    if (isset($_POST['email']) && isset($_POST['new_username'])) {

    $email = $_POST['email'];
    $new_username = $_POST['new_username'];
    
    if (empty($email)) {
        header("Location: ../change-info/change_user.php?error=Email is required");
    }else if (empty($new_username)) {
        header("Location: ../change-info/change_user.php?error=Username is required");
    }else {
        $sql = "SELECT * FROM users WHERE id = '{$_SESSION['user_id']}'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            
            $sql_check_username = "SELECT * FROM users WHERE username = '$new_username'";
            $result_check_username = mysqli_query($conn, $sql_check_username);
            if (mysqli_num_rows($result_check_username) > 0) {
                header("Location: ../change-info/change_user-logic.php?error=Username already exists");
                exit();
            }
            
            if($email === $row['email']){
            $sql = "UPDATE users SET username = '$new_username' where id = '{$_SESSION['user_id']}'";
                mysqli_query($conn, $sql);
                header("Location: ../html/profile.php");
                exit;
            } else {
                header("Location: ../change-info/change_user-logic.php?error=Email doesn't exist");
                exit();
            }
        } else if(mysqli_num_rows($result)>1){ 
            header("Location: ../change-info/change_user-logic.php?error=Email not found");
            exit();
        }
    }
} else {
    header("Location: ../change-info/change_user.php?error =There was an error");
    exit();
}
?>