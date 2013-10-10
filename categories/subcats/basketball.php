<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$basketball=new mySubcategory();
	$basketball->setMySubcategory("sports", "Sports", "basketball", "Basketball");
	$basketball->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$basketball->printsubcategoryHTML($_GET['choice']);
	else
		$basketball->printsubcategoryHTML("none");
		
	$basketball->printAfterMainCategory();

?>
</html>