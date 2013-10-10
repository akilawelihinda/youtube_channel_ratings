<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$realitytv=new mySubcategory();
	$realitytv->setMySubcategory("tvshows", "TV Shows", "realitytv", "Reality TV");
	$realitytv->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$realitytv->printsubcategoryHTML($_GET['choice']);
	else
		$realitytv->printsubcategoryHTML("none");
		
	$realitytv->printAfterMainCategory();

?>
</html>