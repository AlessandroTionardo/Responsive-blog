<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #3E606F">
	<div>
  <a href="index.php" style="color:white"> <h1>Life|Blog</h1></a>
		</div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>



  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <?php if ($_SESSION) : ?>
            <ul class="navbar-nav ml-auto mr-4 mt-2 mt-lg-0">

               <li class="nav-item active">
                  <a href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <li><a href="about.php">About</a></li>
                </li>
                <li class="nav-item">
                  <li><a href="contact.php">Contact</a></li>
                </li>
                <li class="nav-item">
                  <li><a href="logout.php">Logout</a></li>
                </li>
              </ul>
            <?php else: ?>
              <ul class="navbar-nav ml-auto mr-4 mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <li><a href="#about">About</a></li>
                </li>
                <li class="nav-item">
                  <li><a href="Contact.php">Contact</a></li>
                </li>
                <li class="nav-item">
                  <li><a href="login.php">Log In</a></li>
                </li>
              </ul>
            <?php endif; ?>
  </div>
</nav>

