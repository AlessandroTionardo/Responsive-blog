<?php if (isset($_SESSION['user']['username'])) { ?>
	<div class="logged_in_info">
		<span>Welcome, <?php echo $_SESSION['user']['username'] ?></span>
	</div>
<?php }else{ ?>

<?php } ?>
