<?php
session_start();
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
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/contact.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Twitter</title>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <style>
        /* Custom styles for the Twitter timeline */
        .twitter-container {
            max-width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body style="font-family:  Arial, Helvetica, sans-serif;">
    <?php include 'header.php'; ?>
    <div class="twitter-container" id="twitter-container-1"></div>
    <div class="twitter-container" id="twitter-container-2"></div>
    <div class="twitter-container" id="twitter-container-3"></div>
    
    <div style="text-align: center; margin-top: 20px;">
        <a href="https://twitter.com/search?q=technology" target="_blank" class="btn" style = "background-color: #1DA1F2;">Më shumë</a>
    </div>

    <script>
    // Twitter API configuration
    var config = {
        consumerKey: 'SsEIs0LtiPSf92fXaf7FyLzJp',
        consumerSecret: 'pm6b1ifwGFtKPjpd2VTa2GOSb0uXrq8afcFMhQn5j96GtneZCq',
        accessToken: '1634703714349903872-fn43nGqeScGrSaanVWdaoL0iK4C8Lv',
        accessTokenSecret: '5psXmHii5XPjzGktvIaB4Ff0sauoU0SNRSXOVXTsog7Uj',
        screenNames: ['TechCrunch', 'OpenAI', 'engadget'], // Array of screen names
        tweetCount: 7 // Number of tweets to display
    };

    // Load Twitter API and fetch tweets
    window.twttr = (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0],
            t = window.twttr || {};
        if (d.getElementById(id)) return t;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);

        t._e = [];
        t.ready = function(f) {
            t._e.push(f);
        };

        return t;
    }(document, "script", "twitter-wjs"));

    twttr.ready(function() {
        // Fetch user timelines
        config.screenNames.forEach(function(screenName, index) {
            twttr.widgets.createTimeline(
                {
                    sourceType: 'profile',
                    screenName: screenName
                },
                document.getElementById('twitter-container-' + (index + 1)),
                {
                    chrome: 'noheader nofooter',
                    tweetLimit: config.tweetCount
                }
            );
        });
    });
    </script>
    <?php include 'footer.php'; ?>
</body>
</html>
