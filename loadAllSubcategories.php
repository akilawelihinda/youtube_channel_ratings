<?php
require 'connectToDatabase.php';
$category=$_GET['cat'];
		if(!$allSubcats=$db->query("SELECT name, displayName FROM subcategorytrack WHERE category='$category'"))
            die('There was an error connecting: loadAllSubcats0 [' . $db->error . ']');
	print '<option value=""></option>';
	while($oneSubcat=$allSubcats->fetch_assoc())
	{
	print <<<HTMLBLOCK
	<option value="{$oneSubcat['name']}">{$oneSubcat['displayName']}</option>
HTMLBLOCK;
	}
?>