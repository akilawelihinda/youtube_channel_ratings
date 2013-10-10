<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$onepiece=new mySubcategory();
	$onepiece->setMySubcategory("anime", "Anime", "onepiece", "Onepiece");
	$onepiece->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$onepiece->printsubcategoryHTML($_GET['choice']);
	else
		$onepiece->printsubcategoryHTML("none");
		
	$onepiece->printAfterMainCategory();

?>
</html>