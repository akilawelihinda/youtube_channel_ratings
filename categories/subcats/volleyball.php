<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$volleyball=new mySubcategory();
	$volleyball->setMySubcategory("sports", "Sports", "volleyball", "Volleyball");
	$volleyball->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$volleyball->printsubcategoryHTML($_GET['choice']);
	else
		$volleyball->printsubcategoryHTML("none");
		
	$volleyball->printAfterMainCategory();

?>
</html>