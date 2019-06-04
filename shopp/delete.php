<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'damir_pn_10');
$delete = mysqli_query( $connect , "DELETE FROM shop WHERE id ='" . $_POST['id'] . "'");
header('Location: http://damirzabolotskiy/shopp/admin.php');
$result = mysqli_query($connect, $query); ?>