<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$jazz=new mySubcategory();
	$jazz->setMySubcategory("music", "Music", "jazz", "Jazz");
	$jazz->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$jazz->printsubcategoryHTML($_GET['choice']);
	else
		$jazz->printsubcategoryHTML("none");
		
	$jazz->printAfterMainCategory();

?>
</html>