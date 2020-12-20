<?php 
  $conn = mysqli_connect('localhost', 'root', '', 'hayvanlar');
  $conn->set_charset("utf8");
  if (!$conn) { 
      die('Hata: ' . mysqli_connect_error()); 
  }else{
      
  }
?>