<?php include('config.php'); ?>

<?php include('includes/all_functions.php'); ?>

<?php include('includes/public/head_section.php'); ?>

<?php 
	
	if (isset($_GET['topic'])) {
		$topic_id = $_GET['topic'];

		$posts = getPublishedPostsByTopic($topic_id);
		
	}

	// echo "<pre>", var_dump($posts) , "</pre>";
	// die();

?>

<title>LifeBlog | Home </title>

</head>
<body>

<div class="container">

<!-- Navbar -->
	<?php include( ROOT_PATH . '/includes/public/navbar.php'); ?>
<!-- // Navbar -->
	<?php include( ROOT_PATH . '/includes/public/banner.php'); ?>
<!-- Messages -->
	<?php include( ROOT_PATH . '/includes/public/messages.php'); ?>
<!-- // Messages -->

<!-- content -->
<div class="content container">
	<h2 class="content-title row justify-content-center">
		Articles on &nbsp; <u><?php echo getTopicNameById($topic_id); ?></u>
	</h2>
	<hr>
	<div class="row justify-content-center">
	<?php foreach ($posts as $post): ?>
		<div class="post" style="margin-left: 0px;">
			<img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="">

			<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
				<div class="post_info">
					<h3><?php echo $post['title'] ?></h3>
					<div class="info">
						<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
						<span class="read_more">Read more...</span>
					</div>
				</div>
			</a>
		</div>
	<?php endforeach ?>
	</div>


</div>
<!-- // content -->


</div>
<!-- // container -->


<!-- Footer -->
	<?php include( ROOT_PATH . '/includes/public/footer.php'); ?>
<!-- // Footer -->
