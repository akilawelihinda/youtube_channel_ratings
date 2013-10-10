<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$cricket=new mySubcategory();
	$cricket->setMySubcategory("sports", "Sports", "cricket", "Cricket");
	$cricket->setMySubcategory("sports", "Sports", "cricket", "Cricket");
	$cricket->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$cricket->printsubcategoryHTML($_GET['choice']);
	else
		$cricket->printsubcategoryHTML("none");
		
	$cricket->printAfterMainCategory();

?>
</html>