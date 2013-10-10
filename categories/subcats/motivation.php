<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$motivation=new mySubcategory();
	$motivation->setMySubcategory("fitness", "Fitness", "motivation", "Motivation");
	$motivation->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$motivation->printsubcategoryHTML($_GET['choice']);
	else
		$motivation->printsubcategoryHTML("none");
		
	$motivation->printAfterMainCategory();

?>
</html>