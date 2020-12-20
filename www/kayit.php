<!doctype html>
	 <?php include("ayar.php");
ob_start();
session_start();
 
if(!isset($_SESSION["login"])){
    header("Location:index.php");
}
else {
}?>

<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Buca Hayvan Barınağı</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link href="css/admincss1.css" rel="stylesheet" type="text/css">
	<link href="background2.css" rel="stylesheet" type="text/css">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
	<link href="style21.css" rel="stylesheet" type="text/css">
	<link href="stil.css" rel="stylesheet" type="text/css">
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
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
<div class="container">
		
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
<a class="navbar-brand" href="index.php">
          <img src="images/111w.png" width="200vw" alt="">
        </a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">

          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="kayit.php"><img style='padding:7px;' width="30" src="images/eklew.png">KAYIT EKLE<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img style='padding:7px;' width="30" src="images/kalemw.png">KAYIT GÜNCELLE</a>
               <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item bg-dark" style="color:white;" href="cat_update.php"><img style='padding:5px;' width="30" src="images/catw.png">Kediler</a>
          <a class="dropdown-item bg-dark" style="color:white;" href="dog_update.php"><img style='padding:4px;' width="30" src="images/dogw.png">Köpekler</a>
        </div>
            </li>
		<li class="nav-item">
            <a class="nav-link" href="delete.php"><img style='padding:7px;' width="30" src="images/silw.png">KAYIT SİL</a>
          </li>
		<li class="nav-item">
            <a class="nav-link" href="messages.php"><img style='padding:7px;' width="30" src="images/mesajw.png">MESAJLAR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="settings.php"><img style='padding:7px;' width="30" src="images/ayarw.png">AYARLAR</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="logout.php"><img style='padding:7px;' width="30" src="images/cikisw.png">ÇIKIŞ</a>
          </li>
          </ul>
        </div>
	</div>
      </nav>
	 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</header>

<section>
<center>
<div class="container">
	<div class='table table-responsive'>
	<form action="kayitekle.php" method="post" enctype="multipart/form-data" >
		<table class="table table-bordered table-light">
				<tr>
					<th scope='col' class='bg-dark text-light'>İsmi</th>
					<td><input type="text" name="isim" autocomplete="off" required/></td>
				</tr>
				<tr>
					<th scope='col' class='bg-dark text-light'>İlan Tarihi</th>
					<td><input type="date" name="tarih" required/></td>
				</tr>
				<tr>
					<td scope='col' class='bg-dark text-light'>Türü</td>
					<td><input type="radio" name="tur" value="Kedi" required/>Kedi
					<input type="radio" name="tur" value="Köpek" />Köpek</td>
				</tr>
				<tr>
					<th scope='col' class='bg-dark text-light'>Cinsiyeti</th>
					<td><input type="radio" name="cinsiyet" value="Erkek" required/>Erkek
					<input type="radio" name="cinsiyet" value="Dişi" />Dişi</td>
				</tr>
				<tr>
					<th scope='col' class='bg-dark text-light'>Cinsi</th>
					<td><input type="text" name="cinsi" autocomplete="off" required/></td>
				</tr>
				<tr>
					<th scope='col' class='bg-dark text-light'>Yaşı</th>
					<td><input type="number" min="0" max="20" name="yas" required/></td>
				</tr>
				<tr>
					<th scope='col' class='bg-dark text-light'>Sağlık Durumu</th>
					<td><input type="text" name="saglik" autocomplete="off" required/></td>
				</tr>
				<tr>
					<th scope='col' class='bg-dark text-light'>Yapılan Aşılar</th>
					<td><input type="text" name="asi" autocomplete="off" required/></td>
				</tr>
				<tr>
					<th scope='col' class='bg-dark text-light'>Açıklama</th>
					<td><textarea name="aciklama" cols="30" rows="5" required></textarea></td>
				<tr>
					<th scope='col' class='bg-dark text-light'>Resim Yükle: </th>
					<td><input type="file" name="resim" required/></td>
				</tr>
				<tr>
					<th scope='col' class='bg-dark text-light'></th>
					<td><input type="submit" value="Kayıt Ekle" name="submit1"/></td>
				</tr>
				
        </table>
    </form>
	</div>
</center>
	</section>
	</body>