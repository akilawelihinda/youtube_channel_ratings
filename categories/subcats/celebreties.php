<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$celebreties=new mySubcategory();
	$celebreties->setMySubcategory("people", "People", "celebreties", "Celebreties");
	$celebreties->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$celebreties->printsubcategoryHTML($_GET['choice']);
	else
		$celebreties->printsubcategoryHTML("none");
		
	$celebreties->printAfterMainCategory();

?>
</html>