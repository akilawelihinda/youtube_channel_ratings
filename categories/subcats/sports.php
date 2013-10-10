<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$sports=new mySubcategory();
	$sports->setMySubcategory("tvshows", "TV Shows", "sports", "Sports");
	$sports->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$sports->printsubcategoryHTML($_GET['choice']);
	else
		$sports->printsubcategoryHTML("none");
		
	$sports->printAfterMainCategory();

?>
</html>