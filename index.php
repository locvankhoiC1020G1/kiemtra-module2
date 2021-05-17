<?php

require_once __DIR__. '/vendor/autoload.php';
include_once "src/Model/ProductManager.php";
$productmanager = new ProductManager();
$products = $productmanager->getAllProducts();
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
<style>

    .bang{
        width: 70%%;
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }
    tr,td{
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }
    button
</style>
<body>
<table class="bang">
    <a href="src/View/addd.php">THEM</a>
    <form action="src/View/search.php" method="post">
        <input type="text" name="search" id="">
        <button type="submit">tìm</button>    </form>
   <tr> <td>STT</td>
       <td>name</td>
       <td>categories</td>
       <td>price</td>
       <td>amount</td>
       <td>datecreate</td>
       <td>des</td>
       <td>actions</td>
   </tr>
    <?php foreach ($products as $product){ ?>
    <tr> <td><?php echo $product['id'] ?></td>
        <td><?php echo $product['name'] ?></td>
        <td><?php echo $product['categories'] ?></td>
        <td><?php echo $product['price'] ?></td>
        <td><?php echo $product['amount'] ?></td>
        <td><?php echo $product['datecreate'] ?></td>
        <td><?php echo $product['des'] ?></td>
        <td><a href="src/View/delete.php?id=<?php echo $product['id'] ?>" onclick="return confirm('Are your sure?')">Delete</a>
            <a href="src/View/update.php?id=<?php echo $product['id'] ?>" >Update</a>
        </td>
  </tr>
<?php }?>
</table>
</body>
</html>
