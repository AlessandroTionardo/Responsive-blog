<?php  include('../config.php'); ?>

	<?php include(ROOT_PATH . '/includes/admin/head_section.php'); ?>
	<title>Admin | Dashboard</title>
</head>
<body>
	<!--
	<div class="header">
		<div class="logo">
			<a href="<?php echo BASE_URL .'admin/dashboard.php' ?>">
				<h1>LifeBlog - Admin</h1>
			</a>
		</div>
		<div class="user-info">
			<span><?php echo $_SESSION['user']['username'] ?></span> &nbsp; <a href="logout.php" class="logout-btn">logout</a>
		</div>
	</div>
    -->

	<?php include(ROOT_PATH . '/includes/admin/navbar.php'); ?>

	<div class="container content dashboard">
		<h1>Welcome back, <?php echo $_SESSION['user']['username'] ?></h1>
		<br><br>
		<?php  include(ROOT_PATH . '/includes/admin/menu.php') ?>
	</div>

	
	


	<?php include(ROOT_PATH . '/includes/admin/footer.php'); ?>
