<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title><?php echo $this->config->item('site_name')?> - Dashboard</title>
		

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
						<h1 class="page-header">Dashboard</h1>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
				
				<div class="row">
					
					<div class="col-lg-3 col-md-6">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fa fa-newspaper-o fa-5x"></i>
									</div>
									<div class="col-xs-9 text-right">
										<div class="huge"><?php echo Post::all()->count()?></div>
										<div>Total Posts!</div>
									</div>
								</div>
							</div>
							<a href="<?php echo site_url('dashboard/posts')?>">
								<div class="panel-footer">
									<span class="pull-left">View Details</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div> <!-- /. panel-primary -->
					</div> <!-- /. col-lg-3 -->
					
					<div class="col-lg-3 col-md-6">
						<div class="panel panel-green">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
									<i class="fa fa-comments fa-5x"></i>
									</div>
									<div class="col-xs-9 text-right">
									<div class="huge"><?php echo Comment::all()->count();?></div>
										<div>Total Comments!</div>
									</div>
								</div>
							</div>
							<a href="<?php echo site_url('dashboard/comments');?>">
								<div class="panel-footer">
									<span class="pull-left">View Details</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div> <!-- /. panel-primary -->
					</div> <!-- /. col-lg-3 -->
					
					<div class="col-lg-3 col-md-6">
						<div class="panel panel-yellow">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fa fa-users fa-5x"></i>
									</div>
									<div class="col-xs-9 text-right">
										<div class="huge"><?php echo User::all()->count();?></div>
										<div>Total Users!</div>
									</div>
								</div>
							</div>
							<a href="<?php echo site_url('dashboard/users');?>">
								<div class="panel-footer">
									<span class="pull-left">View Details</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div> <!-- /. panel-primary -->
					</div> <!-- /. col-lg-3 -->
					
					<div class="col-lg-3 col-md-6">
						<div class="panel panel-red">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fa fa-folder-open-o fa-5x"></i>
									</div>
									<div class="col-xs-9 text-right">
										<div class="huge"><?php echo Category::all()->count();?></div>
										<div>Total Categories!</div>
									</div>
								</div>
							</div>
							<a href="<?php echo site_url('dashboard/categories');?>">
								<div class="panel-footer">
									<span class="pull-left">View Details</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div> <!-- /. panel-primary -->
					</div> <!-- /. col-lg-3 -->
					
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