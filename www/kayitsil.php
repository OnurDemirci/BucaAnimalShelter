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
}
 if($_POST){
        

	$nosil = $_POST['nosil'];
    
    $sql="select * from sahipp where ilan_no='$nosil'";
    $sql2=mysqli_query($conn,$sql);
    while( $sonuc2=mysqli_fetch_array($sql2,MYSQLI_ASSOC) ){ 
            $sil2 = $sonuc2['resimurl'];
            $tur2= $sonuc2['tur'];
            if (file_exists('C:/wamp64/www/'.$sil2)) {
               unlink('C:/wamp64/www/'.$sil2);
            } 
            else {
              echo "The file filename does not exist";
            }
            $ekle        =    mysqli_query($conn,"delete from sahipp where ilan_no='$nosil'");
            if ($tur2=="Köpek"){
                echo "<script>window.alert('Kayıt Silindi!');</script>";
                header("Refresh:0 url=dog_update.php");
            }
            else {
             echo "<script>window.alert('Kayıt Silindi!');</script>";
            header("Refresh:0 url=cat_update.php"); 
            }
        }   
}

?>