<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$gametutorials=new mySubcategory();
	$gametutorials->setMySubcategory("gaming", "Gaming", "gametutorials", "Game Tutorials");
	$gametutorials->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$gametutorials->printsubcategoryHTML($_GET['choice']);
	else
		$gametutorials->printsubcategoryHTML("none");
		
	$gametutorials->printAfterMainCategory();

?>
</html>