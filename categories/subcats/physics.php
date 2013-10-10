<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$physics=new mySubcategory();
	$physics->setMySubcategory("education", "Education", "physics", "Physics");
	$physics->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$physics->printsubcategoryHTML($_GET['choice']);
	else
		$physics->printsubcategoryHTML("none");
		
	$physics->printAfterMainCategory();

?>
</html>