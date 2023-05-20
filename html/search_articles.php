<?php
session_start();
include "db_conn.php";

if (isset($_GET['query'])) {
  $query = $_GET['query'];

  // Fetch the articles based on the search query
  $sql = "SELECT * FROM articles WHERE titulli LIKE '%$query%' OR permbajtja LIKE '%$query%'";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    // Process and display the search results
    foreach ($result as $row) {
      echo '<a href="news-structure.php?newId=' . $row['id'] .'">
              <div style="display: flex; align-items: center; margin-top: 30px;margin-right: 100px;margin-left: 30px;">
                <img alt="avatar1" src="data:image/jpeg;base64,'.base64_encode($row['fotoja']).'" style="width: 480px; height: 250px; margin-right: 70px;">
                <div style="text-align: left; width: 800px;margin-left: -30px;">
                  <h2 style="margin-top: -50px;">'.$row['titulli'].'</h2>
                </div>
              </div>
            </a>';
    }
  } else {
    echo "An error occurred while performing the search.";
  }
} else {
  echo "Invalid search query.";
}
?>
