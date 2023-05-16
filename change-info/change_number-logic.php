<?php 
    session_start();
    include "../html/db_conn.php";
    if (isset($_POST['email']) && isset($_POST['new_number'])){
        $email = $_POST['email'];
        $new_number = $_POST['new_number'];
        if (empty($email)) {
            header("Location: ../change-info/change_number.php?error=Email është i zbrazët");
        }else if (empty($new_number)) {
            header("Location: ../change-info/change_number.php?error=Numri është i zbrazët");
        }else{
            $sql = "SELECT email FROM users WHERE id = '{$_SESSION['user_id']}'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        if($email === $row['email']){
        $sql = "UPDATE users SET number = '$new_number' where id = '{$_SESSION['user_id']}'";
        mysqli_query($conn, $sql);
        header("Location: ../html/profile.php");
        exit;
            }else{
                header("Location: ../change-info/change_number.php?error=Emaili i tanishëm nuk u gjend");
            exit();
            }
        }
    }

    



?>