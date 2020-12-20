<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Buca Hayvan Barınağı</title>
    <meta 
     name='viewport' 
     content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' 
/>
    <link rel="stylesheet" href="background2.css">
	<link href="style21.css" rel="stylesheet">
	<link href="stil.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	
<?php
$servername = "localhost";
$database = "hayvanlar";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
$conn->set_charset("utf8");

// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
  </head>
    <body>
  <div class="crossfade">
    <figure></figure>
    <figure></figure>
    <figure></figure>
    <figure></figure>
    <figure></figure>
    </div>
<header>
<nav class="navbar navbar-expand-sm navbar-light bg-light">
<div class="container">
		
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
<a class="navbar-brand" href="index.php">
          <img src="images/111.png" width="200vw" alt="">
        </a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">

          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">ANA SAYFA<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kopekler.php">KÖPEKLER</a>
            </li>
		<li class="nav-item">
            <a class="nav-link" href="kediler.php">KEDİLER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="iletisim.html">İLETİŞİM</a>
          </li>
          </ul>
          <div class="social-part">
            <a href="https://www.facebook.com/bucabldveterinerlik/" target="blank" style="padding:7px;"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://twitter.com/bucabld" target="blank" style="padding:7px;"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/bucabelveterinerlik/" target="blank" style="padding:7px;"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          </div>
        </div>
	</div>
      </nav>
	 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</header>
	 <section>
	 <div class="container">
    <script type="text/javascript"> 
     $(function(){
            $('.carousel').carousel({
                interval: 1000 * 2.5 // 1000 x 1 = 1 second
            });
        });</script>
    <div class="carousel bg-secondary"style="margin-top: 35px;" id="carouselExampleIndicators" class="carousel slide bg-secondary" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/slider/1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slider/2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slider/3.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slider/4.png" alt="Forth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slider/5.png" alt="Fifth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slider/6.png" alt="Sixth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slider/7.png" alt="Seventh slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slider/8.png" alt="Eighth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><br>
<div class='ana-sayfa-icerik'>
<p>Son teknoloji ile donatıp, kalite ve kapasitesini yükselttiğimiz Buca Sokak Hayvanları Rehabilitasyon ve Sahiplendirme Merkezi, kurulduğu günden bu yana 14 bin 150 sokak hayvanının tedavisini gerçekleştirip, 2960 tanesini sahiplendirerek sıcak bir yuvaya kavuşturdu. </p>
<div id='project-list2'>
<h2>Son Eklenenler</h2>
    <br>
   <center><ul>
<?php 
        $sorgu = "SELECT isim,Cinsi,resimurl,ilan_no FROM sahipp where sahip1='Hayır' order by ilan_Tarihi desc limit 4";
        $sorguSonucu = mysqli_query($conn, $sorgu) or trigger_error("Hata:". mysqli_error($mysqli), E_USER_ERROR);    
        if($sorguSonucu) {
            while($kayit = mysqli_fetch_assoc($sorguSonucu)) {
        $id= $kayit['ilan_no'];
        $isim1 = $kayit ['isim'];
        echo "<li><a href=profil?id=".$id.".php><div class='list-element'><div class='ihover'><p>Görüntüle</p></div>". "<img src='" .$kayit['resimurl'] ."' alt='proje-1'>";
        echo "<div class='ptext'>";
        echo "<h2>" .$kayit ['isim'] ."</h2>"."</div><p>" .$kayit ['Cinsi'] ."</p></div></a></li>";   
            }
    
        }
    
      
    ?>
    </ul></center><br>
<h2>Son Sahiplendirdiklerimiz</h2>
<center>
    <br>
    <ul>
<?php 
        $sorgu = "SELECT isim,Cinsi,resimurl,ilan_no FROM sahipp where sahip1='Evet' order by ilan_Tarihi desc limit 4";
        $sorguSonucu = mysqli_query($conn, $sorgu) or trigger_error("Hata:". mysqli_error($mysqli), E_USER_ERROR);    
        if($sorguSonucu) {
            while($kayit = mysqli_fetch_assoc($sorguSonucu)) {
        $id= $kayit['ilan_no'];
        $isim1 = $kayit ['isim'];
        echo "<li><a href=profil?id=".$id.".php><div class='list-element'><div class='ihover'><p>Görüntüle</p></div>". "<img src='" .$kayit['resimurl'] ."' alt='proje-1'>";
        echo "<div class='ptext'>";
        echo "<h2>" .$kayit ['isim'] ."</h2>"."</div><p>" .$kayit ['Cinsi'] ."</p></div></a></li>";   
            }
    
        }
    
      
    ?>
    </ul>
  </center></div>
   </div>
	 </section>
	 
	 </div>
	 </body>