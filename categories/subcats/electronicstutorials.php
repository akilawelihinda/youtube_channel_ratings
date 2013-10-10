<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$electronicstutorials=new mySubcategory();
	$electronicstutorials->setMySubcategory("tutorials", "Tutorials", "electronicstutorials", "Electronics Tutorials");
	$electronicstutorials->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$electronicstutorials->printsubcategoryHTML($_GET['choice']);
	else
		$electronicstutorials->printsubcategoryHTML("none");
		
	$electronicstutorials->printAfterMainCategory();

?>
</html>