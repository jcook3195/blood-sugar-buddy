
	<div class="col-lg-4 col-lg-offset-4">
		<h1>Register</h1>
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
				<label for="email">Email</label>
				<input class="form-control" name="email" id="email" type="text">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" name="password" id="password" type="password">
			</div>
			<div class="form-group">
				<label for="password">Confirm Password</label>
				<input class="form-control" name="password2" id="password" type="password">
			</div>
			<div class="form-group">
				<label for="gender">Gender</label>
				<select class="form-control" id="gender" name="gender">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
			</div>
			<div class="form-group">
				<label for="phone">Phone Number</label>
				<input class="form-control" name="phone" id="phone" type="text">
			</div>
			<div>
				<button class="btn btn-register" name="register">Register</button>
			</div>
		</form>
	</div>