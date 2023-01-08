<?php 

class Helper 
{	
	public static function renderTemplate($template_path, $data = [])
	{
		ob_start();
		extract($data);
		require(__DIR__ . DIRECTORY_SEPARATOR . $template_path);
		echo ob_get_clean();
	}

	public static function pdo(\PDO $pdo, string $sql, array $args = NULL)
	{
		if (!$args) {
			return $pdo->query($sql); # SELECT * FROM table
		}
		$stmt = $pdo->prepare($sql); # SELECT * FROM table WHERE id = ?
		$stmt->execute($args); # $id
		return $stmt;
	}

	public static function escape($value) {
		return htmlspecialchars((string) $value, ENT_QUOTES);
	}

	//public static function dbFetchAll($query = '')
	//{
	//	// Connect to the database
	//	$dbh = new PDO('mysql:host=localhost;dbname=test', 'root', '');
	//	
	//	// Prepare and execute the SELECT query
	//	$stmt = $dbh->prepare($query);
	//	$stmt->execute();
	//		
	//	// Fetch the result set as an array
	//	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	//	return $result;
	//}

}