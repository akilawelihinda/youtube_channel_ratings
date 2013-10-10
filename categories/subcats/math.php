<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$math=new mySubcategory();
	$math->setMySubcategory("education", "Education", "math", "Math");
	$math->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$math->printsubcategoryHTML($_GET['choice']);
	else
		$math->printsubcategoryHTML("none");
		
	$math->printAfterMainCategory();

?>
</html>