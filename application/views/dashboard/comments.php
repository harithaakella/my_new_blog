<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title><?php echo $this->config->item('site_name')?> - Comments</title>

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
						<h1 class="page-header">All Comments</h1>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
				
				<?php $this->view('dashboard/_alert')?>
				
				<div class="row">
					<div class="col-lg-12">
					
					<?php if($comments->isEmpty()):?>
					
					<h2>No Comment Yet!</h2>
					
					<?php else:?>
					
						<div class="panel panel-default">
							
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped">
										<thead>
											<tr>
												<th style="width:100px">#</th>
												<th style="width:200px">Name</th>
												<th>Commented on</th>
											</tr>
										</thead>
										<tbody>
										<?php foreach($comments as $comment):?>
											<tr>
												<td><?php echo ++$row;?></td>
												<td><?php echo $comment->name?></td>
												<td><?php echo $comment->post->title?></td>
											</tr>
										<?php endforeach;?>
										</tbody>
									</table>
									<!-- /.table-striped -->
									
									<div class="text-center">
										<?php echo $links; ?>
									</div>
									
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