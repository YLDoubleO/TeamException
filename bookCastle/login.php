<?php 
	$title="Login";

	ob_start();

	include 'templates/login-form.html.php';

	$output=ob_get_clean();

	include 'templates/layout.html.php';
 ?>