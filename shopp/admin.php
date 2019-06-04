<!DOCTYPE html>
<html>
<head>
	<title>SHOP</title>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <form method="POST" action="insert.php" enctype="multipart/form-data">
    <input type="" name="text" placeholder="наименование товара">
    <input type="file" name="image" placeholder="ссылка на картинку">
    <input type="" name="price" placeholder="цена товара">
    <button>добавить игру</button>
  </form>
  <?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'damir_pn_10');
        $query = mysqli_query($connect, 'SELECT * FROM shop');

   for ($i=0; $i < $query->num_rows; $i++) { 
     $opa = $query->fetch_assoc();
     echo '<img src="' . $opa['img'] . '">';
      ?>
      <p><?php echo $opa['text']; ?></p>
      <p><?php echo $opa['price']; ?></p>

      <form action="delete.php" method="POST">
         <?php echo '<input type="hidden" name="id" value="' . $opa['id'] . '" >'; ?>
         <button class="btn btn-primary">удалить</button>
      </form>
      <form action="redactor.php" method="POST">   
          <?php  echo '<input type="hidden" name="text" value="'  . $opa['text'] . '">'?> 
          <?php echo '<input type="hidden" name="price" value="' . $opa['price'] . '">'?>
          <?php echo '<input type="hidden" name="id" value="' . $opa['id'] . '">'?>  
          <button class="btn btn-primary">редактировать</button>
      </form> 
  <?php } ?>
   </body> 
</html>
