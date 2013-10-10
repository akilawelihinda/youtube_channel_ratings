<!doctype html>
<html lang="en">
<?php
require 'headFile.php';
$title="Browse Youtube Channel Rating's different categories! Over 20 different categories and over 100 subcategories!";
$description="Browse all of Youtube Channel Rating's different categories, which include: Education, Humor, Sports, Fitness, Movies, Anime, Product Reviews, Science, History, Tutorials, Cars, Music, People, Beauty, Gaming, Pets, Animals, Travel, News, Blog, and TV Shows!";
printHeadFile();
?>

<link rel="stylesheet" href="main.css">
<meta charset="utf-8" />
<body>	
<div id="big_wrapper">
	<div id="top_div">
		<?php
		$pageName="Categories";
		require 'headerFile.php';
		printHeader();
		?>
	</div>	
	
	<div id="main_div">
	<section id="main_section">
		<ul>
			<li> <a class="categoryLinks" href="categories/education.php">Education</a> </li>
			<li> <a class="categoryLinks" href="categories/humor.php">Humor</a> </li>
			<li> <a class="categoryLinks" href="categories/sports.php">Sports</a> </li>
			<li> <a class="categoryLinks" href="categories/fitness.php">Fitness</a> </li>
			<li> <a class="categoryLinks" href="categories/movies.php">Movies</a> </li>
			<li> <a class="categoryLinks" href="categories/anime.php">Anime</a> </li>
			<li> <a class="categoryLinks" href="categories/productreviews.php">Product Reviews</a> </li>
			<li> <a class="categoryLinks" href="categories/science.php">Science</a> </li>
			<li> <a class="categoryLinks" href="categories/history.php">History</a> </li>
			<li> <a class="categoryLinks" href="categories/tutorials.php">Tutorials</a> </li>
			<li> <a class="categoryLinks" href="categories/cars.php">Cars</a> </li>
			<li> <a class="categoryLinks" href="categories/music.php">Music</a> </li>
			<li> <a class="categoryLinks" href="categories/people.php">People</a> </li>
			<li> <a class="categoryLinks" href="categories/beauty.php">Beauty</a> </li>
			<li> <a class="categoryLinks" href="categories/gaming.php">Gaming</a> </li>
			<li> <a class="categoryLinks" href="categories/petsanimals.php">Pets/Animals</a> </li>
			<li> <a class="categoryLinks" href="categories/newsblog.php">News/Blog</a> </li>
			<li> <a class="categoryLinks" href="categories/tvshows.php">TV Shows</a> </li>
		</ul>
	</section>
	</div>
	
	<div id="side_div">
	<aside id="side_news">
	<h4>Most Popular Categories</h4>
	<ul>
	<?php
	require 'connectToDatabase.php';
		if(!$mostPopularCategories=$db->query("SELECT categoryLink, categoryDisplay FROM categorytrack ORDER BY Number DESC LIMIT 4"))
			die('There was an error connecting: querycategoriespageerror0 [' . $db->error . ']');
	while($row=$mostPopularCategories->fetch_assoc())
		print <<<HTMLBLOCK
		<li> <a class="categoryLinks" href="{$row['categoryLink']}.php"> {$row['categoryDisplay']} </a> </li>
HTMLBLOCK;
	?>
	</ul>
	</aside>
	</div>
	
	<div id="footer_div">
		<?php
		require 'footerFile.txt';
		?>
	</div>
	
</div>
</body>
</html>
