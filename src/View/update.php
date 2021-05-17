<?php
include_once "../Model/ProductManager.php";
if ($_SERVER['REQUEST_METHOD']=='POST'){

    $name = $_POST['name'];
    $categories = $_POST['categories'];
    $price = $_POST['price'];
    $amount = $_POST['price'];
    $datecreate = $_POST['datecreate'];
    $des = $_POST['des'];
    $dbconect = new ProductManager();
    $dbconect->update("$name","$categories","$price","$amount","$datecreate","$des");

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
   name: <input type="text" name="name" value="<?php  ?>"><br>
   category: <input type="text" name="categories" id=""><br>
    price:<input type="text" name="price" id=""><br>
  amount:  <input type="text" name="amount" id=""><br>
  datecreate:  <input type="text" name="datecreate" id=""><br>
   des: <input type="text" name="des" id=""><br>
    <button type="submit">ok</button>
</form>
</body>
</html>
