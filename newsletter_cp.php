<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://unpkg.com/htmx.org@1.8.4" integrity="sha384-wg5Y/JwF7VxGk4zLsJEcAojRtlVp1FKKdGy1qN+OMtdq72WRvX/EdRdqg/LOhYeV" crossorigin="anonymous"></script>
</head>
<body>

<h1>Newsletter</h1>

<table 
	id="newsletter-table" 
	hx-get="/htmx/get_newsletters.php" 
	hx-trigger="load" 
	hx-target="#newsletter-table"
	hx-swap="innerHTML">
	<tr>
		<td colspan="7">Loading newsletters...</td>
	</tr>
</table>

</body>
</html>