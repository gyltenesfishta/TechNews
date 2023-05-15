<?php
session_start();
include "db_conn.php";
if(isset($_SESSION["user_id"])){
    if(isset($_POST["pyet"]) ){
         if(isset($_POST["pyetja"])){
            $pyetja = $_POST["pyetja"];  
            echo $pyetja;
            $sql = "INSERT INTO pyetjet (pyetja) VALUES ('$pyetja')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "success";
                header("Location: faq.php");
                exit;
            }
        }else{
            header("Location: faq.php?erro=Pyetja është e zbrazët");
         }
    }else{
      header("Location: faq.php");
      exit;
  }
}
?>