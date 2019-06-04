<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'damir_pn_10');
$query = mysqli_query($connect, "INSERT INTO shop (img, text, price) VALUES ('". $_FILES['image']['name'] ."' , '". $_POST['text']."' , '".$_POST['price'] ."')");
header('Location: http://damirzabolotskiy/shopp/admin.php');
 ?>