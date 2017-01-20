<?php 
	require_once "dbconnect.php";
	require_once "functions.php";
	require_once "class.php";
?>

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>hityvhs</title>
  <meta name="description" content="hityvhs">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/style.css">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
<div class="container-main">
	
	<?php getAllPosts(); ?>
	

	<div class="post">
		<h5>post_title (hardcoded)</h5>
		<span class="postContent">post_content</span>
		<p class="postPublished">post_published</p>
		<p class="userEmail">user_email</p>
	</div>
	<div class="post">
		<h5>post_title (hardcoded)</h5>
		<span class="postContent">post_content</span>
		<p class="postPublished">post_published</p>
		<p class="userEmail">user_email</p>		
	</div>	
	<div class="post">
		<h5>post_title (hardcoded)</h5>
		<span class="postContent">post_content</span>
		<p class="postPublished">post_published</p>
		<p class="userEmail">user_email</p>		
	</div>	
	
</div>


  <script src="js/scripts.js"></script>
</body>
</html>