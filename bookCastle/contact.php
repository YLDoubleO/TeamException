<?php 
	$title="Contacts";

	ob_start();

	include 'templates/contact.html.php';

	$output=ob_get_clean();

	include 'templates/layout.html.php';
	
 ?>