<?php
	include_once '../Helper.php';

	try {
		$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
		$newsletters = Helper::pdo($pdo, 'SELECT * FROM newsletter');
		//sleep(1); // Simulate a delay
		return Helper::renderTemplate('newsletter/newsletter_table.php', ['newsletters' => $newsletters]);
	} 
	catch (Exception $e) {
		echo $e->getMessage();
	}

?>
