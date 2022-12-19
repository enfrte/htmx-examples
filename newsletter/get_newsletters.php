<?php
//echo __DIR__ . DIRECTORY_SEPARATOR .'newsletter_table.php';
try {
	// Connect to the database
	$dbh = new PDO('mysql:host=localhost;dbname=test', 'root', '');
	
	// Prepare and execute the SELECT query
	$stmt = $dbh->prepare('SELECT * FROM newsletter');
	$stmt->execute();
	
	// Fetch the result set as an array
	$newsletters = $stmt->fetchAll(PDO::FETCH_ASSOC);

	//return render('newsletter_table.php', $newsletters);
	// Add result data to a view template and respond with the template.
	extract($newsletters);
	ob_start();
	include(__DIR__ . DIRECTORY_SEPARATOR . 'newsletter_table.php');
	return ob_end_flush();
} 
catch (PDOException $e) {
	echo $e->getMessage();
}

?>
