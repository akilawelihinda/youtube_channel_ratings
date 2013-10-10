<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$racial=new mySubcategory();
	$racial->setMySubcategory("humor", "Humor", "racial", "Racial");
	$racial->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$racial->printsubcategoryHTML($_GET['choice']);
	else
		$racial->printsubcategoryHTML("none");
		
	$racial->printAfterMainCategory();

?>
</html>