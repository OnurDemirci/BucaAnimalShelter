<?php include("ayar.php");
ob_start();
session_start();
 
if(!isset($_SESSION["login"])){
    header("Location:index.php");
}
else {
}?>
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
	
	if ($_FILES["resim"]["size"]<1024*1024*7){
 
        if (($_FILES["resim"]["type"] == "image/jpeg")
			|| ($_FILES["resim"]["type"] == "image/jpg")
			|| ($_FILES["resim"]["type"] == "image/png")){ 
			$dosya_adi1  = $_FILES["resim"]["name"];
			$uret=array("as","rt","ty","yu","fg");
            $sayi_tut=rand(1,10000);
            $yeni_ad="images/hayvanlar/".$uret[rand(0,4)].$sayi_tut.".jpeg";
 
            if (move_uploaded_file($_FILES["resim"]["tmp_name"],$yeni_ad)){
                echo 'Dosya başarıyla yüklendi.';
                $isim = $_POST['isim'];
			$tarih = $_POST['tarih'];
			$tur = $_POST['tur'];
			$cinsi = $_POST['cinsi'];
			$yas = $_POST['yas'];
			$cinsiyet = $_POST['cinsiyet'];
			$aciklama = $_POST['aciklama'];
			$saglik = $_POST['saglik'];
			$asi = $_POST['asi'];
			
		$sql1="(SELECT max(ilan_no) FROM sahipp where sahipp.tur='$tur')";
	$sorgu1=mysqli_query($conn,$sql1);
	while( $sonuc1=mysqli_fetch_array($sorgu1,MYSQLI_ASSOC) ){
		$max= $sonuc1["max(ilan_no)"]+1;
	}	
            $ekle        =    mysqli_query($conn,"INSERT INTO sahipp (isim, ilan_Tarihi ,ilan_no, tur, Cinsi, Yas, saglik, asi, Cinsiyet, Aciklama,resimurl,sahip1) values ('$isim','$tarih','$max','$tur','$cinsi','$yas','$saglik','$asi','$cinsiyet', '$aciklama','$yeni_ad','Hayır')");

            echo "<script>window.alert('Kayıt Eklendi!');</script>";
			
        }
      else{
            echo "<script>window.alert('Dosya Yüklenemedi!');</script>";
        }
    }
    else {
        echo "<script>window.alert('Dosya yalnızca resim formatında olabilir!');</script>";
    }
}
    else{
    	echo "<script>window.alert('Dosya boyutu 7 Mb ı geçemez!');</script>";	
    }

      
}
	header("Refresh: 0; url=kayit.php");
?>