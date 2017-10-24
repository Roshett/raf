<?php  
	header( "Content-Type: text/html; charset=utf-8" );
		if(isset($_POST['btn'])){
			if($_COOKIE["TestCookie"])
				$value = json_decode($_COOKIE["TestCookie"]);
			else
				
			$item = $_POST['item'];
			$value->$item += 1;
			$value = json_encode($value);
			setcookie("TestCookie", $value, time()+3600);
		}
		if(isset($_POST['show'])){
			$value = json_decode($_COOKIE["TestCookie"]);
			var_dump($value);
		}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart</title>
</head>
<body>
	<form action="index.php" method="post">
		<input hidden type="text" value="4001" name="item">
		<input type="submit" name="btn">
	</form>
	<form action="index.php" method="post">
		<input hidden type="text" value="4002" name="item">
		<input type="submit" name="btn">
	</form>
	<form action="index.php" method="post">
		<input hidden type="text" name="item">
		<input type="submit" name="show">
	</form>
</body>
</html>


	<?php


$products = array("4001" => array("name"=>"Процессор Intel Core i7-6700K","price"=>27499),
				"4002" => array("name"=>"Процессор AMD FX-9590", "price"=>17499),
				"4003" => array("name"=>"Видеокарта GIGABYTE GeForce GTX 1080 G1", "price"=>55999),
				"4004" => array("name"=>"Видеокарта ASUS AMD Radeon R9 390X STRIX", "price"=>29350),
				"4005" => array("name"=>"Оперативная память Kingston ECC [KVR21E15D8K2/16] 16Гб", "price"=>7999),
				"4006" => array("name"=>"Оперативная память Corsair Vengeance [CMZ8GX3M2A1866C9R] 8 Гб", "price"=>4799),
				"4007" => array("name"=>"Блок питания Aerocool KCAS 1000W", "price"=>7399),
				"4008" => array("name"=>"Блок питания Zalman ZM400-LE 400W", "price"=>2399),
				"4009" => array("name"=>"Жесткий диск Seagate 7200 Enterprise NAS", "price"=>10999),
				"4010" => array("name"=>"Жесткий диск Seagate Surveillance 3 Тб", "price"=>7999));
				
?>
