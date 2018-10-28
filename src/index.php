<?php
	
	$dsn = "mysql:host=".$_ENV['DATABASE_HOST'].";dbname=".$_ENV['MYSQL_DATABASE'].";";
	$user = $_ENV['MYSQL_USER'];
	$password = $_ENV['MYSQL_PASSWORD'];

	// データベースの接続
	try {
		$pdo = new PDO($dsn, $user, $password);

		$stmt = $pdo->query("SELECT * FROM ".$_ENV["MYSQL_TABLENAME"]);
		$result = $stmt -> fetch(PDO::FETCH_ASSOC);

		echo "<pre>";
		var_dump($result);
		echo "</pre>";

	} catch(PDOException $e) {
		echo $e->getMessage();
		exit;
	}
?>
