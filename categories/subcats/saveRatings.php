<?php
$score=$_POST['score'];
$userName=$_POST['id'];
require '../../connectToDatabase.php';
		if(!$db->query("UPDATE publisherinfo SET voteSum=voteSum+'$score', voteNumber=voteNumber+1 WHERE userName='$userName'"))
            die('There was an error connecting: saveRatingsquery0 [' . $db->error . ']');
?>