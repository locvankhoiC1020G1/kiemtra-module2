<?php
include_once "../Model/ProductManager.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $categories = $_POST['categories'];
    $price = $_POST['price'];
    $amount = $_POST['amount'];
    $datecreate = $_POST['datecreate'];
    $des = $_POST['des'];
    $productManager = new ProductManager();

    $product = $productManager->createProducts( "$name", "$categories", "$price", "$amount", "$datecreate", "$des");
    header("location:../index.php/");

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

    name: <input type="text" name="name" id="">
    category: <!--<input type="text" name="categories">-->
    <select name="categories" id="">
        <option value="điện  thoại">điện thoại</option>
        <option value="ô tô">ô tô</option>
        <option value="đồ chơi">đồ chơi</option>
        <option value="cây cảnh"> cây cảnh</option>
    </select>
    price: <input type="number" name="price">
    amount: <input type="number" name="amount">

    datecreate: <input type="datetime-local" name="datecreate">
    des: <input type="text" name="des">
    <button type="submit"> them</button>
</form>
</body>
</html>
