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
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/admincss.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="background2.css">
<?php
$servername = "localhost";
$database = "hayvanlar";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
$conn->set_charset("utf8");



if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} if($_POST){ 
		$yenikadi= $_POST['newkadi'];
		$yenisifre= $_POST['newpassword'];
		$yenisifreon= $_POST['confirmpassword'];

			
	$sql1="select * from admin";
	
	if ($yenisifre == $yenisifreon){
	$sorgu1=mysqli_query($conn,$sql1);
	while( $sonuc1=mysqli_fetch_array($sorgu1,MYSQLI_ASSOC) ){
	}	
    $ekle        =    mysqli_query($conn,"update admin set username='$yenikadi' , passcode='$yenisifre'");
	echo "<center style='margin-top:25px;'>Giriş bilgileri güncellendi. Ayarlar sayfasına yönlendiriliyorsunuz.</center>";
	header("Refresh: 2; url=settings.php");
}
	else {
		 echo "<center><p>Şifreler eşleşmiyor.<br><br><a href=javascript:history.back(-1)>Geri Dön</a></p></center>";
	}
}


?>