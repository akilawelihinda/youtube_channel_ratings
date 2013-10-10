<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$whitehouse=new mySubcategory();
	$whitehouse->setMySubcategory("newsblog", "News/Blog", "whitehouse", "White House");
	$whitehouse->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$whitehouse->printsubcategoryHTML($_GET['choice']);
	else
		$whitehouse->printsubcategoryHTML("none");
		
	$whitehouse->printAfterMainCategory();

?>
</html>