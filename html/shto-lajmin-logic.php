<?php

include "db_conn.php";

//Shto lajmin
if (isset($_POST['shto-lajmin']) && is_uploaded_file($_FILES['articleImage']['tmp_name'])) {
    $titulli = $_POST['titulli'];
    $permbajtja = $_POST['permbajtja'];
    $image = $_FILES['articleImage']['tmp_name'];
    $image_data = file_get_contents($image);


    $sql = "INSERT INTO articles (titulli, permbajtja, fotoja) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $titulli, $permbajtja, $image_data);
    $result = mysqli_stmt_execute($stmt);
    if ($result) {
        echo "<script>alert('Lajmi u shtua me sukses!'); window.location.href = 'shto-lajmin.php';</script>";
    } else {
        echo "<script>alert('Pati problem gjatë shtimit të lajmit.'); window.location.href = 'shto-lajmin.php';</script>";
    }
}

//Fshije lajmin
if(isset($_POST['fshij'])){
    $newId = $_GET['newId'];
    $sql = "DELETE FROM articles WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $newId);
    $result = mysqli_stmt_execute($stmt);
    if ($result) {
        echo "<script>alert('Lajmi u fshi me sukses!'); window.location.href = 'news.php';</script>";
    } else {
        echo "<script>alert('Lajmi nuk u fshi.'); window.location.href = 'news-structure.php';</script>";
    }
}
?>
