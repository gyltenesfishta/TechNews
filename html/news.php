<?php
session_start();
include "db_conn.php";

// Get the current page number from the URL, or set it to 1 if not present
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

// Calculate the offset for the current page based on the page number
$offset = ($page - 1) * 5;

// Fetch the articles for the current page using LIMIT and OFFSET clauses
$sql = "SELECT * FROM articles LIMIT 5 OFFSET $offset";
$result = mysqli_query($conn, $sql);

if (isset($_POST["login"])) {
  header("Location: login.php");
  exit();
}

if (isset($_POST["signup"])) {
  header("Location: signup.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/news.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechNews.com - The latest news on Technology</title>

    <style>
      img{
        border-radius: 10px;
      }
      .search-container {
        margin: 20px auto;
        max-width: 400px;
    }

    .search-container input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid green;
        border-radius: 4px;
        box-sizing: border-box;
    }

    </style>
</head>
<?php include "header.php" ?>
<body>
    <div class="search-container my-3">
        <input type="text" id="search-input" placeholder="Kërko artikujt...">
    </div>

    <div class="lajmet" id="article-container"> <!-- Add the ID to the container -->
        <span class="lajmet12">
        
        <?php 
foreach ($result as $row) {
  echo '<a href="news-structure.php?newId=' . $row['id'] .'"><div style="display: flex; align-items: center; margin-top: 30px;margin-right: 100px;margin-left: 30px;">
          <img alt="avatar1" src="data:image/jpeg;base64,'.base64_encode($row['fotoja']).'" style="width: 480px; height: 250px; margin-right: 70px;">
          <div style="text-align: left; width: 800px;margin-left: -30px;">
            <h2 style="margin-top: -50px;">'.$row['titulli'].'</h2>';
  echo '</div>
        </div></a>';
}

// Count the total number of articles to calculate the total number of pages
$sql = "SELECT COUNT(*) as total FROM articles";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$total_pages = ceil($row['total'] / 5);

echo '</div>'; // Close the article container div

// Generate links to navigate between pages
echo '<div class="tabelat">
        <table border="1">
          <tr>';
            for ($i = 1; $i <= $total_pages; $i++) {
              if ($i == $page) {
                  echo '<td>' . $i . '</td>';
              } else {
                  echo '<td><a href="?page=' . $i . '">' . $i . '</a>';
              }
            } 
             ?>
          </tr></table></div>
<?php include "footer.php" ?>

<script>
    $(document).ready(function() {
        $("#search-input").on("input", function() {
            var searchText = $(this).val().toLowerCase();
            $(".lajmet12 a").each(function() {
                var articleTitle = $(this).find("h2").text().toLowerCase();
                if (articleTitle.indexOf(searchText) === -1) {
                    $(this).hide();
                } else {
                    $(this).show();
                }
            });
        });
    });
</script>

</body>
</html>
