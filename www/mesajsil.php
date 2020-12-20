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
        

			$nosil = $_POST['id1'];
     

            $ekle        =    mysqli_query($conn,"delete from mail where id='$nosil'");
            
        }
echo "<script>window.alert('Mesaj Silindi!');</script>";
header("Refresh:0 url=messages.php");
?>