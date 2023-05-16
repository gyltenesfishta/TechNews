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
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="../css/marketing.css">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechNews.com - Lajmet e fundit nga teknologjia</title>
</head>
<body>
<?php include "header.php" ?>
      <div class="container">
      <video width="100%" height="500px" loop autoplay>
        <source src="../videos/video.mp4" type="video/mp4">
      </video>
      </div>
      <div class="teksti">
        <p>Reklamoni brendin tuaj</p>
      </div>
      <button type="button" class="btn1 btn-primary btn-round mr-md-3 mb-md-0 mb-2" id="butoni">Aplikoni</button>
      <div id="result"></div>
      
      <div class="paragrafi">
        <p class="teksti1">Sot, reklamimi është dinamik më shumë se kurrë më parë. Për biznesin tuaj më nuk mjafton vetëm prezenca në internet. Zhvillimi i platformave të shumta për komunikim ka bërë që komunikimi me konsumatorët tuaj dhe ata potencial të jetë më kompleks. Të gjitha këto, në të njëjtën kohë kanë bërë që ne të lansojmë produkte të reja të cilat do ta lehtësojnë jetën tuaj. Do ta ndihmojnë dhe do ta ngrisin në nivel më të lartë brendin tuaj. Ne bizneseve nuk ju ofrojmë vetëm hapësira reklamuese, por edhe të dhëna, statistika të cilat do të ju ndihmojnë që t’i arrini objektivat tuaja, të krijoni raporte dhe ndërveprim më të afërt me klientët tuaj. Gjithmonë kemi qenë dhe jemi lider në këtë industri.</p>
        <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
        <svg version="1.1" class="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
           viewBox="0 0 512 512" xml:space="preserve">
        <path style="fill:#D0D8D7;" d="M95.458,68.21H27.817C12.454,68.21,0,80.664,0,96.027v281.071c0,15.362,12.454,27.817,27.817,27.817
          h67.641"/>
        <g>
          <path style="fill:#000000;" d="M273.106,489.955h-102.4c-16.928,0-30.043-14.814-27.988-31.611l1.283-10.442l5.263-42.991h102.4
            l-5.263,42.991l-1.283,10.442C243.063,475.142,256.178,489.955,273.106,489.955z"/>
          <path style="fill:#000000;" d="M512,77.73v317.666c0,5.263-4.265,9.515-9.515,9.515H44.227c-5.251,0-9.515-4.253-9.515-9.515V77.73
            c0-5.263,4.265-9.515,9.515-9.515h458.258C507.735,68.215,512,72.468,512,77.73z"/>
        </g>
        <path style="fill:#19B783;" d="M512,77.73v265.432H34.711V77.73c0-5.263,4.265-9.515,9.515-9.515h458.258
          C507.735,68.215,512,72.468,512,77.73z"/>
        <polygon style="fill:#D0D8D7;" points="251.664,404.911 246.401,447.903 144.001,447.903 149.264,404.911 "/>
        <path style="fill:#7A8280;" d="M273.359,379.118c-8.076,0-11.947-10.406-5.823-15.658c2.889-2.478,7.125-2.845,10.396-0.896
          c3.115,1.858,4.841,5.586,4.198,9.164C281.377,375.927,277.652,379.118,273.359,379.118z"/>
        <rect x="107.651" y="22.045" style="fill:#F2C07E;" width="331.422" height="321.123"/>
        <rect x="107.651" y="312.486" style="fill:#D6A86F;" width="331.422" height="30.687"/>
        <rect x="145.071" y="246.556" style="fill:#F23488;" width="256.582" height="44.545"/>
        <circle style="fill:#19B783;" cx="273.356" cy="134.296" r="69.494"/>
        <path style="fill:#F23488;" d="M312.189,191.938c-11.095,7.484-24.46,11.856-38.834,11.856s-27.738-4.372-38.834-11.856
          c3.504-18.247,19.565-32.039,38.834-32.039S308.685,173.692,312.189,191.938z"/>
        <path style="fill:#D6A86F;" d="M273.357,212.699c-43.23,0-78.4-35.17-78.4-78.4s35.17-78.4,78.4-78.4s78.4,35.17,78.4,78.4
          S316.586,212.699,273.357,212.699z M273.357,73.717c-33.405,0-60.581,27.176-60.581,60.581s27.176,60.581,60.581,60.581
          s60.581-27.176,60.581-60.581S306.762,73.717,273.357,73.717z"/>
        <circle style="fill:#EF9C7D;" cx="273.356" cy="134.296" r="25.607"/>
        <polygon style="fill:#F23488;" points="185.991,98.663 161.937,78.172 137.882,98.663 137.882,22.045 185.991,22.045 "/>
        <path style="fill:#0c0c0c;" d="M328.636,470.452H196.685v19.504H348.14l0,0C348.14,479.184,339.407,470.452,328.636,470.452z"/>
        </svg>  
      </div>
      <?php include "footer.php"; ?>
                    <script>
                      $(document).ready(function() {
                    $("#submit").click(function() {
                      alert("You successfully signed up!");
                    });
                  });
                    </script>
      <script src="/js/marketingu.js"></script>
      
     
</body>
</html>