<?php 

class Helper 
{	
	public static function renderTemplate($template_path = '', $data = [])
	{
		if ( is_array( $data ) ){
			extract($data);
		}

		ob_start();
		include(__DIR__ . DIRECTORY_SEPARATOR . $template_path);
		echo ob_get_clean();
	}


	public static function dbFetchAll($query = '')
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

}