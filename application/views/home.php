<div class="col-lg-4 text-center">
	<div class="sidebar-options">
		<h1>Login or Register</h1>
		<a class="btn btn-login" href="<?php echo base_url(); ?>auth/login">Login</a>
		<a class="btn btn-register" href="<?php echo base_url(); ?>auth/register">Register</a>
	</div>
</div>
<div class="col-lg-6">
	<h1>Calculate Dose</h1>
<div class="row">
	<div class="col-xs-12">
		<?php echo form_open('home'); ?>
			<?php echo form_label('Blood Sugar'); ?>
			<?php
				$data = array(
					'id'			=> 'bs',
					'class'			=> 'form-control',
					'name'			=> 'blood_sugar',
					'placeholder'	=> 'Blood Sugar Reading',
					'pattern'		=> '\d*'
				);
			?>
			<?php echo form_input($data); ?>
		<?php echo form_close(); ?>
	</div>
</div>
<div style="margin-top: 20px;" class="row">
	<div class="col-xs-12">
		<?php echo form_open('home'); ?>
			<?php echo form_label('Carbs'); ?>
			<?php
				$data = array(
					'id'			=> 'cg',
					'class'			=> 'form-control',
					'name'			=> 'carbs',
					'placeholder'	=> 'Grams of Carbs',
					'pattern'		=> '\d*'
				);
			?>
			<?php echo form_input($data); ?>
		<?php echo form_close(); ?>
	</div>
</div>
	<div style="padding: 0 14px; "class="row">
		<div class="col-xl-2">
			<button id="bs-btn"	style="margin-top: 20px;" type="button" class="btn btn-success">Calculate</button>
		</div>
		<div class="col-xl-5">
			<div style="margin-top: 20px;" id="output" role="alert">
			</div>
		</div>
		<div class="col-xl-5">
			<div style="margin-top: 20px;" class="alert alert-success" role="alert">
				<p>Formula: ((Bloodsugar - 150)/50) + (Grams of Carbs/15).</p>
			</div>
		</div>
	</div>
</div>
