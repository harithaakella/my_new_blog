<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title><?php echo $this->config->item('site_name')?> - Edit group</title>

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
						<h1 class="page-header">Edit group</h1>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
				
				<div class="row">
					<div class="col-lg-6">
						<?php echo form_open("dashboard/groups/".$group->id."/edit");?>
							<div class="form-group">
								<label>Group's Name</label>
								<input class="form-control" type="text" name="name" value="<?php echo $group->name; ?>" placeholder="E.g. Admin">
								<p class="help-block"><?php echo form_error('name'); ?></p>
							</div>
							<div class="form-group">
								<label>Group's Description</label>
								<input class="form-control" type="text" name="description" value="<?php echo $group->description; ?>">
								<p class="help-block"><?php echo form_error('description'); ?></p>
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