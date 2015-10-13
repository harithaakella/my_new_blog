<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title><?php echo $this->config->item('site_name')?> - Edit Category</title>

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
						<h1 class="page-header">Edit - <?php echo $category->name ?></h1>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
				
				<div class="row">
					<div class="col-lg-6">
						<?php echo form_open('dashboard/categories'.'/'.$category->id.'/edit');?>
							<div class="form-group">
								<label>Category's Name</label>
								<input class="form-control" name="name" value="<?php echo $category->name ?>" placeholder="E.g. Personal">
								<p class="help-block"><?php echo form_error('name'); ?></p>
							</div>
							<button type="submit" class="btn btn-primary">Update</button>
							<a class="btn btn-default" href="<?php echo $this->session->previous_url; ?>">Back</a>
							</div>
						<?php echo form_close();?>
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