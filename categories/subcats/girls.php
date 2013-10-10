<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$girls=new mySubcategory();
	$girls->setMySubcategory("beauty", "Beauty", "girls", "Girls");
	$girls->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$girls->printsubcategoryHTML($_GET['choice']);
	else
		$girls->printsubcategoryHTML("none");
		
	$girls->printAfterMainCategory();

?>
</html>