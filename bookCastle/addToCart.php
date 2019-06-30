<?php 
	$title="Purchase Books";
	ob_start();

	include 'templates/addToCart.html.php';

	$output=ob_get_clean();

	include 'templates/layout.html.php';
 ?>