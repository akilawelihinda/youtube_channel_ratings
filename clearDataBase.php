<?php
	require 'connectToDatabase.php';
		
	if(!$db->query("UPDATE categoryTrack SET number=0"))
		die('There was an error connecting: clearData0 [' . $db->error . ']');
?>