<!doctype html>
<html lang="en">
<?php
require 'headFile.php';
$title="Submit Video to Youtube Channel Ratings";
$description="Submit a Youtube video to Youtube Channel Ratings so other users can see your post! Be part of our growing community!";
printHeadFile();
?>
<link rel="stylesheet" href="main.css">
<meta charset="utf-8" />
<body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script>
$(document).ready(function(){
  $("input").focus(function(){
    $(this).css("background-color","#cccccc");
  });
  $("input").blur(function(){
    $(this).css("background-color","#ffffff");
  });
});
</script>

<div id="big_wrapper">
	<div id="top_div">
	<?php
	$pageName="Submit Video";
	require 'headerFile.php';
	printHeader();
	?>
	</div>
	
	<div id="main_div">
	<br>
	<br>
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
<form name="formName" action="submitvideo.php" method="post" onsubmit="return validateForm()" >
		Name:  <input type="text" name="user_name" style="width:250px"><br><br>
		Publisher:  <input type="text" name="publisher"><br><br>
		Title:  <input type="text" name="title"><br><br>
		Description:<br><textarea name="description" rows=4 cols=30></textarea><br><br>
		Link:  <input type="text" name="link" style="width: 300px;"><br><br>
		Category:  <select name="categoryName" class="cat" onchange="javascript: dropdownList(this.options[this.selectedIndex].value);">
		<script>
		$(document).ready(function(){
			$(".cat").load("loadAllCategories.php");
		});
		</script>
		</select>
		<br><br>
	Sub-Category:  <select name="subcatName" class="subcat">
		<script>
		function dropdownList(category){
		var request="loadAllSubcategories.php?cat="+category;
			$(".subcat").load(request);
		}
		</script>
		</select>
		<br><br>
		<input type="hidden" name="check_submit" value="1">
		<input class="submit" type="submit" name="Submit">
		<script>
		function validateForm(){
		var array=new Array();
		array[0]=document.forms["formName"]["user_name"].value;
		array[1]=document.forms["formName"]["publisher"].value;
		array[2]=document.forms["formName"]["title"].value;
		array[3]=document.forms["formName"]["link"].value;
		array[4]=document.forms["formName"]["categoryName"].value;
		array[5]=document.forms["formName"]["subcatName"].value;
			for(var x=0; x<array.length; x++)
			{
				if(array[x]=="" || array[x]==null){
				alert("All fields must be filled out");
				return false;
				}
			}
		}
		</script>
		</form>
HTMLBLOCK;
}

function processForm()
{
$array=$_POST;
	foreach($array as $key=>$value)
	{
	$oneString[$key]=strip_tags($value);
	}
	
$name=$array['user_name'];
$publisher=$array['publisher'];
$title=$array['title'];
$description=$array['description'];
$link=$array['link'];
$date=time();
$category=$array['categoryName'];
$subcategory=$array['subcatName'];

require 'myArticle.php';
$newArticle=new myArticle();
$formattedDate=date('M/d/Y', $date);
	if(strpos($link, 'http:')==false)
		$link='http:' . $link;
		
$newArticle->setMyArticle("$title", "$publisher", "$description", "$link", "$formattedDate", "$name");
$articleHTML=$newArticle->getArticleHTML();

require 'connectToDatabase.php';
$statement = $db->prepare("INSERT INTO myarticle VALUES(?, ?, ?, ?, ?, ?)");
$statement->bind_param('sssssi', $publisher, $category, $subcategory, $link, $articleHTML, $date);
	if(!$statement->execute())
		die('There was an error running the querySubmitVideo0 [' . $statement->error . ']');
print "Your video has been submitted!";
}
?>
<br>
<br>
	<div id="footer_div">
	<?php
		require 'footerFile.txt';
	?>
	</div>
	
</div>
</div>
</body>

</html>