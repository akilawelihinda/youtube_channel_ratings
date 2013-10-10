<?php
require 'connectToDatabase.php';
		if(!$allCategories=$db->query("SELECT category, categoryDisplay FROM categorytrack"))
            die('There was an error connecting: loadAllCats0 [' . $db->error . ']');
	print '<option value=""></option>';
	while($oneCategory=$allCategories->fetch_assoc())
	{
	print <<<HTMLBLOCK
	<option value="{$oneCategory['category']}">{$oneCategory['categoryDisplay']}</option>
HTMLBLOCK;
	}
?>