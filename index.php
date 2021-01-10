<?php include('config.php'); ?>

<?php include('includes/public/registration_login.php'); ?>

<?php include('includes/all_functions.php'); ?>

<?php include('includes/public/head_section.php'); ?>

<?php 
	
	$posts = getPublishedPosts();

?>
<title>LifeBlog | Home </title>

</head>

<body> 

<!-- Navbar -->
<?php include( ROOT_PATH . '/includes/public/navbar.php'); ?>
<!-- // Navbar -->

<!-- Banner -->
	<?php include( ROOT_PATH . '/includes/public/banner.php'); ?>
<!-- // Banner -->

<!-- Messages -->
	<?php include( ROOT_PATH . '/includes/public/messages.php'); ?>
<!-- // Messages -->



  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Life|Blog</h1>
            <span class="subheading">Blog made for lifestyle</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  <h2 class="content-title row justify-content-center">Recent Articles</h2>
  <br>
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

    <div class="content">
	<hr>
	<div class="row justify-content-center">
	<?php foreach ($posts as $post): ?>
		<div class="post col-4-md row" style="margin-left: 0px;">
			<img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="">

			<?php if (isset($post['topic']['name'])): ?>
				<a 
					href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>"
					class="btn category">
					<?php echo $post['topic']['name'] ?>
				</a>
			<?php endif ?>

			<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
				<div class="post_info ">
					<h3><?php echo $post['title'] ?></h3>
          <br>
					<div class="info">
						<span class="date"><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
					</div>
				</div>
			</a>
		</div>
	<?php endforeach ?>
</div>
    


        <!-- Pager 
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div> -->
      </div>
    </div>
  </div>

  <hr>

  <?php include( ROOT_PATH . '/includes/public/footer.php'); ?>
