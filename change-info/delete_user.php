<?php 
    session_start();
    include "../html/db_conn.php";
     if(isset($_SESSION['user_id'])){
        $sql = "DELETE FROM users WHERE id = '{$_SESSION['user_id']}'";
        mysqli_query($conn, $sql);
        header("Location: ../html/login.php");
     }
     
?>