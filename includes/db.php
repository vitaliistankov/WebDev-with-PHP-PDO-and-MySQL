<?php

/*	$dsn = "mysql:host=sql102.epizy.com;dbname=epiz_28400474_remote_db; username=epiz_28400474; password=hRENT7EWNZ";

	try {
		$pdo = new PDO($dsn, 'epiz_28400474', 'hRENT7EWNZ');
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}
*/

	$dsn = "mysql:host=localhost; dbname=db";

	try {
		$pdo = new PDO($dsn, 'root', '');
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}

	
?>