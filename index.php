<?php 
// в начале конфиг
define('DB_DRIVER','mysql');
define('DB_HOST','localhost');
define('DB_PORT', '8889');
define('DB_NAME','test');
define('DB_USER','marina');
define('DB_PASS','1111');
 
try
{
	// соединяемся с базой данных
 
	$connect_str = DB_DRIVER . ':host='. DB_HOST .';dbname=' . DB_NAME;
	$db = new PDO($connect_str,DB_USER,DB_PASS);
 
	// $rows = $db->exec("INSERT INTO `testing` VALUES
	// 	(null, 'Ivan', 'ivan@test.com'),
	// 	(null, 'Petr', 'petr@test.com'),
	// 	(null, 'Vasiliy', 'vasiliy@test.com')
	// ");
 
 
	$error_array = $db->errorInfo();
 
	if($db->errorCode() != 0000)
 
	echo "SQL ошибка: " . $error_array[2] . '<br />';
 
	// if($rows) echo "Количество затронутых строк: " . $rows. "<br />";
 
	// теперь выберем несколько строчек из базы
 
	$result = $db->query("SELECT * FROM `products` LIMIT 3");
 
	// в случае ошибки SQL выражения выведем сообщене об ошибке
 
	$error_array = $db->errorInfo();
 
	if($db->errorCode() != 0000)
 
	echo "SQL ошибка: " . $error_array[2] . '<br /><br />';
 
	// теперь получаем данные из класса PDOStatement
 
    //var_dump($result->fetchAll(PDO::FETCH_ASSOC));
 
	while($row = $result->fetch())
	{
		var_dump($row);
	}
}
catch(PDOException $e)
{
	die("Error: ".$e->getMessage());
}