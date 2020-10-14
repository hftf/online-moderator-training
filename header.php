<?php

$time_start = microtime(true);
session_start();

require_once 'utils.php';

if (isset($_POST['continue'])) {
	if (!isset($_SESSION[$page['id']])) {
		$_SESSION[$page['id']] = ['value' => $_POST['continue'], 'time' => time()];
	}
	header('Location: ' . get_next() . '.php');
}
$feedback = true;
$action = '';
if (isset($_POST['feedback-submit'])) {
	$action = $_SERVER['HTTP_REFERER'];
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Online moderator interactive training</title>
</head>
<body>
	<header>
		<h1>Online moderator interactive training</h1>
	</header>
	<main>
		<form action="<?php echo $action; ?>" method="post">
