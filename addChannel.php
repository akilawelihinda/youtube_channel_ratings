<?php
	if(!array_key_exists("check_submit", $_POST))
		displayForm();
	else{
		processForm();
	}
	
function displayForm()
{
print <<<HTMLBLOCK
<link rel="sytlesheet" href="main.css">
		<script>
		function validateForm(){
		var array=new Array();
		array[0]=document.forms["formName"]["user_name"].value;
		array[1]=document.forms["formName"]["rating"].value;
		array[2]=document.forms["formName"]["categories"].value;
		array[3]=document.forms["formName"]["subcats"].value;
		array[4]=document.forms["formName"]["description"].value;
			for(var x=0; x<array.length; x++)
			{
				if(array[x]=="" || array[x]==null){
				alert("All fields must be filled out");
				return false;
				}
			}
		}
		</script>
<form name="formName" action="addChannel.php" method="post" onsubmit="return validateForm()" >
		User Name:<input type="text" name="user_name" style="width:250px"><br><br>
		Rating:<input type="text" name="rating"><br><br>
		Categories:<input type="text" name="categories"><br><br>
		Subcategories:<input type="text" name="subcats"><br><br>
		Description:<br><textarea name="description" rows=4 cols=30></textarea><br>
		<input type="hidden" name="check_submit" value="1">
		<input class="submit" type="submit" name="Submit">
</form>
HTMLBLOCK;
}

function processForm(){
$array=$_POST;

$userName=$array['user_name'];
$rating=$array['rating'];
$categories=$array['categories'];
$subcategories=$array['subcats'];
$description=$array['description'];
$link='www.youtube.com/' . $userName;
//inserting channel into publisherinfo
require 'connectToDatabase.php';
	if(!$channel=$db->query("SELECT userName FROM publisherinfo WHERE userName='$userName'"))
		die('There was an error running the addChannel0 [' . $db->error . ']');
		
		if(($channel->num_rows)>0){
		exit("Channel has already been added");
		}
$channel->close();

if(!$statement = $db->query("INSERT INTO publisherinfo(userName, homePageLink, rating, categories, subcategories, description) VALUES('$userName', '$link', '$rating', '$categories', '$subcategories', '$description')"))
		die('There was an error running the addChannel1 [' . "$db->error" . ']');
print "Channel has been added!";

//now updating articles and stars
if(!$articles=$db->query("SELECT articlehtml FROM myarticle WHERE publisher=\"$userName\""))
		die('There was an error running the addChannelquery2 [' . $db->error . ']');
		
	$newPublisherURL=<<<HTMLBLOCK
	<h2> <div class="publisherAndStars"> <a class="publisherLinks" href="http://www.youtube.com/$userName">$userName</a> <div class="star" data-score="$rating"> </div> </div>
HTMLBLOCK;
	$counter =0;
		while($article=$articles->fetch_assoc())
		{
		$oldHTML=$article['articlehtml'];
			if(strpos($oldHTML, $newPublisherURL)!=false)
			{
				continue;
			}
		$articleHTML=str_replace('\'', "", $oldHTML);
		$newArticleHTML=str_ireplace("<h2>$userName", $newPublisherURL, $articleHTML);
			if(!$statement=$db->query("UPDATE myarticle SET articlehtml='$newArticleHTML' WHERE articlehtml='$oldHTML'"))
				die('There was an error running the addChannelsquery4 [' . $db->error . ']');
		//$statement->bind_param('ss', $articleHTML, $userName);
			//if(!$statement->execute())
			//	die('There was an error running the addChannelsquery5 [' . $db->error . ']');
		$counter++;
		}
		
		print "Articles Updated: $counter";
		
	}
?>