<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$minecraft=new mySubcategory();
	$minecraft->setMySubcategory("gaming", "Gaming", "minecraft", "Minecraft");
	$minecraft->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$minecraft->printsubcategoryHTML($_GET['choice']);
	else
		$minecraft->printsubcategoryHTML("none");
		
	$minecraft->printAfterMainCategory();

?>
</html>