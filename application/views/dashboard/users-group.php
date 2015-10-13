<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title><?php echo $this->config->item('site_name')?> - Categories</title>

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
						<h1 class="page-header">All Categories</h1>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
				
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
							Add new category
							</div>
							<!-- /.panel-heading -->
						
							<div class="panel-body">
								<?php echo form_open('dashboard/groups', ['class'=>'form-inline'])?>
									<div class="form-group">
										<label class="sr-only" for="groupName">Group Name</label>
										<input type="text" class="form-control" name="name" placeholder="Group's name">
									</div>
									<div class="form-group">
										<label class="sr-only" for="groupDesc">Group Description</label>
										<input type="text" class="form-control" name="description" placeholder="Group's description">
									</div>
									<button type="submit" class="btn btn-default">Submit</button>
									
									<?php echo form_error('name'); ?>
									
								</form>
							</div>
						</div>
					</div>
					<!-- /.col-lg-12 -->
					
				</div>
				<!-- /.row -->
				
				<?php $this->view('dashboard/_alert')?>
				
				<div class="row">
					<div class="col-lg-12">

					<?php if(count($groups) < 1):?>
						
						<h2>No Group Yet!</h2>
						
						<?php else: ?>
						<div class="panel panel-default">
							
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped">
										<thead>
											<tr>
												<th style="width:60px">#</th>
												<th>Name</th>
												<th>Description</th>
												<th style="width:150px; text-align:center">Action</th>
											</tr>
										</thead>
										<tbody>
										<?php foreach($groups as $group):?>
											<tr>
												<td><?php echo ++$row?></td>
												<td><?php echo $group->name?></td>
												<td><?php echo $group->description?></td>
												<td style="text-align:center">
													<a class="btn btn-primary btn-xs" href="<?php echo site_url('dashboard/groups').'/'.$group->id.'/edit'?>">
														<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit</a>
													
													<?php echo form_open('dashboard/groups/delete',['style'=>'display:inline'])?>
														<input type="hidden" name="id" value="<?php echo $group->id?>" >
														<button class="btn btn-danger btn-xs" type="submit">
														<span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</button>
													</form>
												</td>
											</tr>
										<?php endforeach;?>
										</tbody>
									</table>
									<!-- /.table-striped -->
									
								</div>
								<!-- /.table-responsive -->
								
							</div>
							<!-- /.panel-body -->
							
						</div>
						<!-- /.panel -->
						
						<?php endif;?>
						
					</div>
					<!-- /.panel-heading -->
					
				</div>
				<!-- /.row -->
		
			</div>
			<!-- /#page-wrapper -->

		</div>
		<!-- /#wrapper -->

		<!-- Load JS -->
		<?php $this->view('dashboard/_js')?>

	</body>
</html>