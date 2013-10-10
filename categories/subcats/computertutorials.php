<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$computertutorials=new mySubcategory();
	$computertutorials->setMySubcategory("tutorials", "Tutorials", "computertutorials", "Computer Tutorials");
	$computertutorials->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$computertutorials->printsubcategoryHTML($_GET['choice']);
	else
		$computertutorials->printsubcategoryHTML("none");
		
	$computertutorials->printAfterMainCategory();

?>
</html>