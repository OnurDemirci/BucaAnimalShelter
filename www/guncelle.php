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
}
if($_POST){ 
			$ilan= $_POST['no'];
			$isim = $_POST['isim'];
			$tarih = $_POST['tarih'];
			$cinsi = $_POST['cinsi'];
			$yas = $_POST['yas'];
			$cinsiyet = $_POST['cinsiyet'];
			$aciklama = $_POST['aciklama'];
			$saglik = $_POST['saglik'];
			$asi = $_POST['asi'];
			$sahip2 = $_POST['sahip1'];
			
	$sql1="select * from sahipp where ilan_no=$ilan";
	$sorgu1=mysqli_query($conn,$sql1);
	while( $sonuc1=mysqli_fetch_array($sorgu1,MYSQLI_ASSOC) ){
		
    $ekle        =    mysqli_query($conn,"update sahipp set isim='$isim', ilan_Tarihi='$tarih', Cinsi='$cinsi', Yas='$yas',saglik='$saglik', asi='$asi', Cinsiyet='$cinsiyet', Aciklama='$aciklama',sahip1='$sahip2' where ilan_no=$ilan");
    $tur= $sonuc1['tur'];
    if($ekle) {
    	if ($tur=='Köpek') {
    	echo "<script>window.alert('Kayıt Güncellendi!');</script>";
		header("Refresh: 0; url=dog_update.php");
    	}
    	else if ($tur=='Kedi') {
    	echo "<script>window.alert('Kayıt Güncellendi!');</script>";
		header("Refresh: 0; url=cat_update.php");

    	}
    }
    else {
    	echo mysqli_error($conn);
    }	
}
}
?>