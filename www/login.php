<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Buca Hayvan Barınağı</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/background2.css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="background2.css">
	<link href="css/admincss1.css" rel="stylesheet" type="text/css">
  </head>
<body>
	<div class="container">
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
 
include("ayar.php");
ob_start();
session_start();
 
$kadi = $_POST['kadi'];
$sifre = $_POST['sifre'];
 
$sql_check = mysqli_query($conn,"select * from admin where username='".$kadi."' and passcode='".$sifre."' ") or die(mysql_error());
 
if(mysqli_num_rows($sql_check))  {
    $_SESSION["login"] = "true";
    $_SESSION["user"] = $kadi;
    $_SESSION["pass"] = $sifre;
    header("Location:kayit.php");
}
else {
    if($kadi=="" or $sifre=="") {
        echo "<p>Lütfen kullanıcı adı ya da şifreyi boş bırakmayınız!<br><br> <a href=javascript:history.back(-1)>Geri Don</a></p>";
    }
    else {
        echo "<p>Kullanıcı Adı/Şifre Yanlış.<br><br><a href=javascript:history.back(-1)>Geri Dön</a></p>";
    }
}
 
ob_end_flush();
?></div>