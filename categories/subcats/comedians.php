<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$comedians=new mySubcategory();
	$comedians->setMySubcategory("humor", "Humor", "comedians", "Comedians");
	$comedians->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$comedians->printsubcategoryHTML($_GET['choice']);
	else
		$comedians->printsubcategoryHTML("none");
		
	$comedians->printAfterMainCategory();

?>
</html>