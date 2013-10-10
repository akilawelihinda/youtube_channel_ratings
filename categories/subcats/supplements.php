<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$supplements=new mySubcategory();
	$supplements->setMySubcategory("fitness", "Fitness", "supplements", "Supplements");
	$supplements->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$supplements->printsubcategoryHTML($_GET['choice']);
	else
		$supplements->printsubcategoryHTML("none");
		
	$supplements->printAfterMainCategory();

?>
</html>