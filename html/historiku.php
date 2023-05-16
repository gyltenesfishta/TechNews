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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Historiku</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Explora&display=swap');

body{
    background-color: black;
}
.nav-item{
    font-size: 25px;
    
}
.nav-link{
    color: white;
}
.nav-link:hover{
    color: black;

}
.navbar-brand{
    font-size: 25px;
}
.logo{
    padding: 5px;
    margin-top: -5px;
}
.dropdown-menu{
    background-color:dodgerblue;
    height: 118px; 
}
.dropdown-item{
    margin-top: -10px;
    font-size: 25px;
    padding: 0;
    text-align: center;
    margin-top: 5px;
    color: white;
    height: 50px;
}
.dropdown-item:hover{
    background-color: black;
    color: white;
    
}


.navbar{
    height: 70px;
}



        body{
            background-color:lemonchiffon;
        }
.historiku{
    text-align: center;
}

h3{
    color:red;
}
h1{
   font-size:40px;
}
.g{
    text-align: justify;
    padding-left:350px;
    padding-right:350px;
    color:grey;
}
.z{
  position: relative;
    padding-left:110px;
    width:500px;
}

.ambienti{
  position: absolute;
   padding-left: 550px;
   padding-top: -250px;
   font-family: 'Explora', cursive;
  font-size:30px;
  color:darkblue;
  margin-top:-200px;

   
}
.subscribe{
padding-left: 2%;
padding-right: 2%;
margin-top: -9%;
padding-bottom: 5%;
}

.submit_button{
padding-top: 0.5%;
}
#submit{
border-radius: 10px;
color: red;
font-weight: bold;
}
a:hover{
color: black;
}
.emailText,.passwordText{
border-radius: 8px;
}
a{
text-decoration: none;
}
.p{
  margin-bottom: 250px;
}
.table{
  margin-top:-100px;
  margin-left:20%;
}
canvas{
    border: 1px solid black;
    border-radius: 30px;
    margin-left: 35px;
    width: 510px;
    height: 80px;
    margin-bottom: -10px;

}

    </style>
</head>
<?php include "header.php" ?>
    
<div class="historiku">
    <br><br><br>
<img src="../images/Tech-News.png">
<br><br><br>
<h3>Të njihemi më shumë!</h3>
<h1><i>Kush  jemi  ne?</i></h1>
<p> - - - - - - </p>

<p class="g"> ‘TECH NEWS’ u themelua në vitin 2018, fillimisht qëllimi i gazetës tonë ishte raportimi i lajmeve nga më të ndryshmet për vendin tonë. <br><br>
    Duke e parë zhvillimin e teknologjisë ndër vite, dhe interesimin e jashtëzakonshëm të njerëzve të moshave të ndryshme veçanërshit të të rinjëve për tu kyçur në fushën e teknologjisë, gjë që është bërë e dukshme në gjithë botën, njashtu edhe në vendin tonë, menduam që të bëhemi burimi kryesor ku qytetaret e vendit tone 
mund te informohen direkt per teknologjine, per zhvillimet e fundit te saj, per mundesite qe ajo ofron, dhe çdo gje rreth saj.<br><br>

Ne fillimet e gazetes, te punesuar kane qene vetem 5 puntore. Ne zhvillimet e siper te saj, ne sukseset qe kjo gazete numeronte dita dites, shkak i kualitetit te lajmeve tona
 qe rezultonte me numer te madh te lexuesve, gazeta jone u be mundesi punesimi per shume njerez.<br><br>



</p>
</div>

<div class="p">
<img class="z" src="/images/gazeta.jpg">
<canvas>

</canvas><p class="ambienti"> Ky eshte ambienti i punes; <br> i bukur, i rehatshem, ndriçues, motivues per te gjithe qe punojne ketu. </p>
</div>

<div class="table">
  <table id="">
    <h3>Ndryshimi i statistikave</h3>
    <thead>
        <tr bgcolor="#AED6F1">
            <th scope="col" title="Tech-News">Tech-News</th>
            <th scope="col" title="statistics">Statistikat</th>
            <th scope="col" title="Muajt">Janar</th>
            <th scope="col" title="Books">Shkurt</th>
            <th scope="col" title="Lectures">Mars</th>
            <th scope="col" title="Autodidact">Prill</th>
           

        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Prishtine</td>
            <td>71,312</td>
            <td><progress max="100" value="45">45%</progress></td>
            <td><progress max="100" value="75">75%</progress></td>
            <td><progress max="100" value="25">25%</progress></td>
            <td><progress max="100" value="50">50%</progress></td>
        </tr>
        <tr>
            <td>Tirane</td>
            <td>67,897</td>
            <td><progress max="100" value="35">35%</progress></td>
            <td><progress max="100" value="60">60%</progress></td>
            <td><progress max="100" value="55">55%</progress></td>
            <td><progress max="100" value="80">80%</progress></td>
        </tr>
        <tr>
            <td>Prizren</td>
            <td>52,000</td>
            <td><progress max="100" value="40">40%</progress></td>
            <td><progress max="100" value="20">20%</progress></td>
            <td><progress max="100" value="45">45%</progress></td>
            <td><progress max="100" value="15">15%</progress></td>
        </tr>
        <tr>
            <td>Peje</td>
            <td>49,679</td>
            <td><progress max="100" value="35">35%</progress></td>
            <td><progress max="100" value="56">56%</progress></td>
            <td><progress max="100" value="95">95%</progress></td>
            <td><progress max="100" value="40">40%</progress></td>
        </tr>
        <tr>
            <td>Shkoder</td>
            <td>39,999</td>
            <td><progress max="100" value="15">15%</progress></td>
            <td><progress max="100" value="40">40%</progress></td>
            <td><progress max="100" value="35">35%</progress></td>
            <td><progress max="100" value="10">10%</progress></td>
        </tr>
        <tr>
            <td>Ferizaj</td>
            <td>58,031</td>
            <td><progress max="100" value="50">50%</progress></td>
            <td><progress max="100" value="55">55%</progress></td>
            <td><progress max="100" value="55">55%</progress></td>
            <td><progress max="100" value="80">80%</progress></td>
        </tr>
    </tbody>
</table>
</div>
<?php include "footer.php"; ?>
              <script>
                $(document).ready(function() {
              $("#submit").click(function() {
                alert("You successfully signed up!");
              });
            });
              </script>
<script src="../js/index.js">

</script>
</body>

</html>