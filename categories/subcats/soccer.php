<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$soccer=new mySubcategory();
	$soccer->setMySubcategory("sports", "Sports", "soccer", "Soccer");
	$soccer->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$soccer->printsubcategoryHTML($_GET['choice']);
	else
		$soccer->printsubcategoryHTML("none");
		
	$soccer->printAfterMainCategory();

?>
</html>