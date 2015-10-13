<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title><?php echo $this->config->item('site_name')?> - Change Password</title>

		<!-- Load CSS -->
		<?php $this->view('dashboard/_css')?>

	</head>

	<body>

		<div id="wrapper">

		<!-- Navigation -->
		<?php $this->view('dashboard/_menu')?>
		
			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Change your password</h1>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
				
				<?php $this->view('dashboard/_alert')?>
				
				<div class="row">
					<div class="col-lg-6">
						<?php echo form_open("dashboard/change-password");?>
							<div class="form-group">
								<label>New Password</label>
								<input class="form-control" type="password" name="password">
								<p class="help-block"><?php echo form_error('password'); ?></p>
							</div>
							<div class="form-group">
								<label>Confirm Password</label>
								<input class="form-control" type="password" name="passwordconfirm" placeholder="Re-type your new password">
								<p class="help-block"><?php echo form_error('passwordconfirm'); ?></p>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>						
						<?php echo form_close()?>
					</div>
				</div>
		
			</div>
			<!-- /#page-wrapper -->

		</div>
		<!-- /#wrapper -->

		<!-- Load JS -->
		<?php $this->view('dashboard/_js')?>

	</body>
</html>