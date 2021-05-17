<?php
include_once "../Model/ProductManager.php";
$value = $_POST['search'];
$dbconnect = new ProductManager();
$products = $dbconnect->search($value);
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
<table>

    <tr> <td>STT</td>
        <td>name</td>
        <td>categories</td>
        <td>price</td>
        <td>amount</td>
        <td>datecreate</td>
        <td>des</td>
    </tr>
    <?php foreach ($products as $product){ ?>
        <tr> <td><?php echo $product['id'] ?></td>
            <td><?php echo $product['name'] ?></td>
            <td><?php echo $product['categories'] ?></td>
            <td><?php echo $product['price'] ?></td>
            <td><?php echo $product['amount'] ?></td>
            <td><?php echo $product['datecreate'] ?></td>
            <td><?php echo $product['des'] ?></td>
            <!-- <td><a href="function/delete.php?id=<?php /*echo $product['id'] */?>" onclick="return confirm('Are your sure?')">Update</a></td>-->
        </tr>
    <?php }?>
</table>
</body>
</html>
