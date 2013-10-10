<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$theories=new mySubcategory();
	$theories->setMySubcategory("science", "Science", "theories", "Theories");
	$theories->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$theories->printsubcategoryHTML($_GET['choice']);
	else
		$theories->printsubcategoryHTML("none");
		
	$theories->printAfterMainCategory();

?>
</html>