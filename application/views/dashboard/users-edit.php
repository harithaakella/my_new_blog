<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title><?php echo $this->config->item('site_name')?> - Add new user</title>

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
						<h1 class="page-header">Edit user</h1>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
				
				<div class="row">
					<div class="col-lg-6">
						<?php echo form_open("dashboard/users/".$user->id."/edit");?>
							<div class="form-group">
								<label>Username</label>
								<input class="form-control" type="text" name="username" value="<?php echo $user->username; ?>" placeholder="E.g. pisyek">
								<p class="help-block"><?php echo form_error('username'); ?></p>
							</div>
							<div class="form-group">
								<label>E-mail</label>
								<input class="form-control" type="text" name="email" value="<?php echo $user->email; ?>" disabled>
								<p class="help-block"><?php echo form_error('email'); ?></p>
							</div>
							<div class="form-group">
								<label>Status : </label>
								<label class="radio-inline">
									<input type="radio" name="status" value="1"<?php echo ($user->active == 1 ? ' checked' : '')?>> Active
								</label>
								<label class="radio-inline">
									<input type="radio" name="status" value="0"<?php echo ($user->active == 0 ? ' checked' : '')?>> Inactive
								</label>
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