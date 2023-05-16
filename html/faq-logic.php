<?php
session_start();
include "db_conn.php";

if (isset($_SESSION["user_id"])) {
    if (isset($_POST["pyet"])) {
        if (!empty($_POST["pyetja"])) {
            $pyetja = $_POST["pyetja"];  
            $sql = "INSERT INTO pyetjet (pyetja) VALUES ('$pyetja')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("Location: faq.php?success=Pyetja u ruajt në databazë");
                exit;
            } else {
                header("Location: faq.php?error=Database error");
                exit;
            }
        } else {
            header("Location: faq.php?error=Pyetja është e zbrazët");
            exit;
        }
    } else {
        header("Location: faq.php");
        exit;
    }
}
?>