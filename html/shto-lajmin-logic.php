<?php
session_start();
include "db_conn.php";
if(isset($_POST['shto-lajmin'] ) && is_uploaded_file($_FILES['articleImage']['tmp_name'])){
    $titulli = $_POST['titulli'];
    $permbajtja = $_POST['permbajtja'];
    $image = $_FILES['articleImage']['tmp_name'];
     $image_data = file_get_contents($image);
    
   
    $sql = "INSERT INTO articles (titulli, permbajtja, fotoja) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $titulli, $permbajtja, $image_data);
    $result = mysqli_stmt_execute($stmt);
    if ($result) {
        $response = array('status' => 'success', 'message' => 'Lajmi u shtua me sukses!');
        echo json_encode($response);
        exit;
    } else {
        $response = array('status' => 'error', 'message' => 'Error occurred while inserting the article.');
        echo json_encode($response);
        exit;
    }
}
?>