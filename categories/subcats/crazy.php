<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$crazy=new mySubcategory();
	$crazy->setMySubcategory("humor", "Humor", "crazy", "Crazy");
	$crazy->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$crazy->printsubcategoryHTML($_GET['choice']);
	else
		$crazy->printsubcategoryHTML("none");
		
	$crazy->printAfterMainCategory();

?>
</html>