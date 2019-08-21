
	<div class="col-lg-4 col-lg-offset-4">
		<h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
		<?php if(isset($_SESSION['success'])) { ?>
			<div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
		<?php } ?>
		<a href="<?php echo base_url(); ?>auth/logout">Logout</a>
	</div>
