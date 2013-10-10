<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$generaltutorials=new mySubcategory();
	$generaltutorials->setMySubcategory("tutorials", "Tutorials", "generaltutorials", "General Tutorials");
	$generaltutorials->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$generaltutorials->printsubcategoryHTML($_GET['choice']);
	else
		$generaltutorials->printsubcategoryHTML("none");
		
	$generaltutorials->printAfterMainCategory();

?>
</html>