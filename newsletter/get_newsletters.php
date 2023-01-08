<?php
	include_once '../Helper.php';

	try {
		$newsletters = Helper::dbFetchAll('SELECT * FROM newsletter');
		//sleep(1); // Simulate a delay
		return Helper::renderTemplate('newsletter/newsletter_table.php', ['newsletters' => $newsletters]);
	} 
	catch (PDOException $e) {
		echo $e->getMessage();
	}

?>
