<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Buca Hayvan Barınağı</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/background2.css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/admincss1.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="background2.css">
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
  </header>

<div id="cikis"><?php
session_start();
ob_start();
session_destroy();
echo "<center>Çıkış yaptınız. Giriş sayfasına yönlendiriliyorsunuz.</center>";
header("Refresh: 2; url=giris.php");
ob_end_flush();
?></div>