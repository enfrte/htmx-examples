<?php

if (empty($_POST['type']) || empty($_POST['name'])) {
	echo "I don't know what's going on.";
	return;
}
if ($_POST['type'] == 'greet') {
	echo "Hello, ". $_POST['name'];
}
if ($_POST['type'] == 'insult') {
	echo "Duck you, " . $_POST['name'];
}
