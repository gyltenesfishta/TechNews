<?php 
    session_start();
    include "../html/db_conn.php";
    if (isset($_POST['curr_password']) && isset($_POST['new_password']) && isset($_POST['verify_password'])) {

    $curr_password = $_POST['curr_password'];
    $new_password = $_POST['new_password'];
    $verify_password = $_POST['verify_password'];
    
    if (empty($curr_password)) {
        header("Location: ../change-info/changePw.php?error=Fjalëkalimi është i zbrazët");
    }else if (empty($new_password)) {
        header("Location: ../change-info/changePw.php?error=Fjalëkalimi është i zbrazët");
    }else if (empty($verify_password)) {
        header("Location: ../change-info/changePw.php?error=Fjalëkalimi është i zbrazët");
    } else {
        $sql = "SELECT * FROM users WHERE id = '{$_SESSION['user_id']}'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $hashed_password = hash('sha256', $row['salt'] . $curr_password);
        if(hash('sha256', $row['salt'] . $curr_password) === $row['hashed_password']){
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            
            if($new_password === $verify_password){

            $hashed_password = hash('sha256', $row['salt'] . $new_password);
            $sql = "UPDATE users SET hashed_password = '$hashed_password' where id = '{$_SESSION['user_id']}'";
                mysqli_query($conn, $sql);
                header("Location: ../html/profile.php");
                exit;
            }
            // Compare the hashed password
        else {
                // Passwords don't match, show error
                header("Location: ../change-info/changePw.php?error=Fjalëkalimet nuk përputhen");
                exit();
            }
        } 
    }else {
            // User not found, show error
            header("Location: ../change-info/changePw.php?error=Fjalëkalimi i tanishëm nuk u gjend");
            exit();
        }
    }
} else {
    header("Location: ../change-info/changePw.php?error =Mbush të gjitha fushat");
    exit();
}
?>