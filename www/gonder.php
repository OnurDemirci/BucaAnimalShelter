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
					
	$adi = $_POST['isim'];
	$email = $_POST['email'];
	$konu = $_POST['konu'];
	$mesaj = $_POST['mesaj'];
	$id1=substr($konu, 0,5);
	
	$sql1="(SELECT max(id) FROM mail)";
	$sorgu1=mysqli_query($conn,$sql1);
	while( $sonuc1=mysqli_fetch_array($sorgu1,MYSQLI_ASSOC) ){
	$max1=$sonuc1['max(id)']+1;	
	}
	$sql2="INSERT INTO mail (adi, email1, konu, mesaj, id) values ('$adi', '$email', '$konu', '$mesaj', '$max1')";
	
	
	$ekle  =  mysqli_query($conn,$sql2);
if (!$ekle)
  {
  echo("Error description: " . mysqli_error($conn));
  }
else {
	echo "<script>window.alert('Mesajınız Gönderildi!');</script>";
	header("Refresh:0;  url=profil?id=".$id1.".php");
}
}
		
?>
