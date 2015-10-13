<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title><?php echo $this->config->item('site_name')?> - Forgot Password</title>

		<!-- Load CSS -->
		<?php $this->view('dashboard/_css')?>

	</head>

	<body>
	
		<div class="container">
			<div class="row">
			
				<div class="col-md-4 col-md-offset-4">
					<div class="login-panel panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Please insert your E-mail</h3>
						</div>
						<div class="panel-body">
							<div id="infoMessage"><?php echo $message;?></div>
							<?php echo form_open("auth/forgot_password");?>
								<fieldset>
									<div class="form-group">
										<?php echo form_input($email);?>
									</div>
								<button type="submit" class="btn btn-lg btn-success btn-block">Submit</button>
							</fieldset>
							<?php echo form_close();?>
						
						</div>
						
						<div class="panel-footer">
							<p><a href="<?php echo site_url('/')?>">Back to Home</a> <span class="pull-right"><a href="<?php echo site_url('auth/login')?>">Go to Login</a></span> </p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Load JS -->
		<?php $this->view('dashboard/_js')?>

	</body>
</html>