<?php

	try {
		$newsletters = dbFetchAll('SELECT * FROM newsletter');
		sleep(1); // Simulate a delay
		return renderTemplate('newsletter_table.php', ['newsletters' => $newsletters]);
	} 
	catch (PDOException $e) {
		echo $e->getMessage();
	}

	function renderTemplate($template_path = '', $data = [])
	{
		if ( is_array( $data ) ){
			extract($data);
		}

		ob_start();
		include(__DIR__ . DIRECTORY_SEPARATOR . $template_path);
		echo ob_get_clean();
	}

	function dbFetchAll($query = '')
	{
		// Connect to the database
		$dbh = new PDO('mysql:host=localhost;dbname=test', 'root', '');
		
		// Prepare and execute the SELECT query
		$stmt = $dbh->prepare($query);
		$stmt->execute();
			
		// Fetch the result set as an array
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

?>
