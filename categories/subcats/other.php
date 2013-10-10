<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$other=new mySubcategory();
	$other->setMySubcategory("humor", "Humor", "other", "Other");
	$other->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$other->printsubcategoryHTML($_GET['choice']);
	else
		$other->printsubcategoryHTML("none");
		
	$other->printAfterMainCategory();

?>
</html>