<?php
include "db.php";

$id = $_GET["id"] ?? 0;
$step = $id + 3;

$result = $db->query("SELECT * FROM `products` LIMIT 0, {$step}");

$error_array = $db->errorInfo(); 
if($db->errorCode() != 0000) {
    echo "SQL ошибка: " . $error_array[2] . '<br/>';
}

$products = $result->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Домашнее задание № 4</title>
</head>
<body>
    <ol>
        <?php foreach ($products as $product): ?>
            <li><?=$product["name"]?>  <?=$product["price"]?> $</li>
            <?php $id = $product["id"] ?>
        <?php endforeach; ?>
    </ol>       
    <a href="/index.php/?id=<?=$id?>">
        <button>Загрузить еще</button>
    </a>
</body>
</html>