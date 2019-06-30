<?php 
	$title="Free e-book download";
	ob_start();

	include 'templates/ebook.html.php';

	$output=ob_get_clean();
	include 'templates/layout.html.php';
 ?>