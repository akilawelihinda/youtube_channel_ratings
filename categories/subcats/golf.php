<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$golf=new mySubcategory();
	$golf->setMySubcategory("sports", "Sports", "golf", "Golf");
	$golf->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$golf->printsubcategoryHTML($_GET['choice']);
	else
		$golf->printsubcategoryHTML("none");
		
	$golf->printAfterMainCategory();

?>
</html>