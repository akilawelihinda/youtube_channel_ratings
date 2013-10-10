<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$vines=new mySubcategory();
	$vines->setMySubcategory("humor", "Humor", "vines", "Vines");
	$vines->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$vines->printsubcategoryHTML($_GET['choice']);
	else
		$vines->printsubcategoryHTML("none");
		
	$vines->printAfterMainCategory();

?>
</html>