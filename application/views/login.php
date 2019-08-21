
	<div class="col-lg-4 col-lg-offset-4">
		<h1>Login</h1>
		<?php if($this->session->flashdata('error')): ?>
			<div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
		<?php endif; ?>
		<?php if(isset($_SESSION['success'])) { ?>
			<div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
		<?php } ?>
		<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
		<form action="" method="POST">
			<div class="form-group">
				<label for="username">Username</label>
				<input class="form-control" name="username" id="username" type="text">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" name="password" id="password" type="password">
			</div>
			<div>
				<button class="btn btn-login" name="login">Login</button>
			</div>
		</form>
	</div>

