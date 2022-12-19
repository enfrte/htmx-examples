<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="https://unpkg.com/htmx.org@1.8.4" integrity="sha384-wg5Y/JwF7VxGk4zLsJEcAojRtlVp1FKKdGy1qN+OMtdq72WRvX/EdRdqg/LOhYeV" crossorigin="anonymous"></script>

	<title>Document</title>
</head>

<body>

	<div id="parent-div">
		<p>Replace contents of this div</p>
		<button hx-post="/htmx/clicked.php" hx-trigger="click" hx-target="#parent-div" hx-swap="outerHTML">
			Click 1
		</button>
	</div>
	<hr>
	<div>
		<p>Replace contents of some other div</p>
		<button hx-post="/htmx/clicked.php" hx-trigger="click" hx-target="#some-div" hx-swap="innerHTML">
			Click 2
		</button>
	</div>
	<div id="some-div">
		<p>Some other div</p>
	</div>
	<hr>
	<div id="replace-parent-div">
		<p>Replace this div</p>
	</div>
	<button hx-post="/htmx/clicked.php" hx-trigger="click once" hx-target="#replace-parent-div" hx-swap="outerHTML">
		Click 3
	</button>
	<hr>

</body>

</html>