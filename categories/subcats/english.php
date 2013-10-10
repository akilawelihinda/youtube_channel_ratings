<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$english=new mySubcategory();
	$english->setMySubcategory("education", "Education", "english", "English");
	$english->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$english->printsubcategoryHTML($_GET['choice']);
	else
		$english->printsubcategoryHTML("none");
		
	$english->printAfterMainCategory();

?>
</html>