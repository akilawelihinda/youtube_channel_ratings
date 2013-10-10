<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$parody=new mySubcategory();
	$parody->setMySubcategory("humor", "Humor", "parody", "Parody");
	$parody->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$parody->printsubcategoryHTML($_GET['choice']);
	else
		$parody->printsubcategoryHTML("none");
		
	$parody->printAfterMainCategory();

?>
</html>