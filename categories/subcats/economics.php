<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$economics=new mySubcategory();
	$economics->setMySubcategory("education", "Education", "economics", "Economics");
	$economics->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$economics->printsubcategoryHTML($_GET['choice']);
	else
		$economics->printsubcategoryHTML("none");
		
	$economics->printAfterMainCategory();

?>
</html>