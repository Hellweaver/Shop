<!DOCTYPE html>
<html>
<head>
	<title>SHOP</title>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'damir_pn_10');
        $query = mysqli_query($connect, 'SELECT * FROM shop');

   for ($i=0; $i < $query->num_rows; $i++) { 
     $opa = $query->fetch_assoc();
     echo '<img src="' . $opa['img'] . '">';
      ?>
      <p><?php echo $opa['text']; ?></p>
      <p><?php echo $opa['price']; ?></p>
  <?php } ?>
   </body> 
</html>
