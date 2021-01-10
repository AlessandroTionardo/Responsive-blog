<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #3E606F">
	<div class="logo_div">
			<a href="dashboard.php" style="color:white"> <h1>Life|Blog</h1></a>
		</div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mr-4 mt-2 mt-lg-0">
               <li class="nav-item active">
                  <a href="dashboard.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <li><a href="<?php echo BASE_URL . 'admin/create_post.php' ?>">Create Posts</a></li>
                </li>
                <li class="nav-item">
                  <li><a href="<?php echo BASE_URL . 'admin/posts.php' ?>">Manage Posts</a></li>
                </li>
                <li class="nav-item">
                  <li><a href="<?php echo BASE_URL . 'admin/users.php' ?>">Manage Users</a></li>
                </li>
                <li class="nav-item">
                <a href="<?php echo BASE_URL . 'admin/topics.php' ?>">Manage Topics</a>
                </li>
                <li class="nav-item">
                  <li><a href="logout.php">Logout</a></li>
                </li>
              </ul>
  </div>
</nav>