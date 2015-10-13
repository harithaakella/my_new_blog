	<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo site_url('/')?>"><?php echo $this->config->item('site_name')?></a>
			</div>
			<!-- /.navbar-header -->

		<ul class="nav navbar-top-links navbar-right">
			<li class="dropdown">
				<a class="dropdown-toggle"href="#">
					<i class="fa fa-user fa-fw"></i> Hello <?php echo $this->ion_auth->user()->row()->username;?> !
				</a>
			</li>
			<!-- /.dropdown -->
		</ul>
		<!-- /.navbar-top-links -->

		<div class="navbar-default sidebar" role="navigation">
			<div class="sidebar-nav navbar-collapse">
				<ul class="nav" id="side-menu">
					<li>
						<a <?php echo ($menu == 'dashboard' ? 'class="active" ' : '')?>href="<?php echo site_url('dashboard')?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
					</li>
					<li <?php echo ($menu == 'posts' || $menu == 'posts_create' ? 'class="active"' : '')?>>
					<a href="#" <?php echo ($menu == 'posts' || $menu == 'posts_create' ? 'class="active"' : '')?>><i class="fa fa-newspaper-o fa-fw"></i> Posts<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li>
								<a href="<?php echo site_url('dashboard/posts')?>">View all</a>
							</li>
							<li>
								<a href="<?php echo site_url('dashboard/posts/create')?>">Add new</a>
							</li>
						</ul>
					<!-- /.nav-second-level -->
					</li>
					<li>
						<a <?php echo ($menu == 'categories' ? 'class="active" ' : '')?>href="<?php echo site_url('dashboard/categories')?>"><i class="fa fa-folder-open-o fa-fw"></i> Categories</a>
					</li>
					<li>
						<a <?php echo ($menu == 'comments' ? 'class="active" ' : '')?>href="<?php echo site_url('dashboard/comments')?>"><i class="fa fa-comments-o fa-fw"></i> Comments</a>
					</li>
					<?php if($this->ion_auth->is_admin()):?>
					<li <?php echo ($menu == 'users' || $menu == 'users_create' ? 'class="active"' : '')?>>
						<a href="#" <?php echo ($menu == 'users' || $menu == 'users_create' ? 'class="active"' : '')?>><i class="fa fa-users fa-fw"></i> User Management<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li>
								<a href="<?php echo site_url('dashboard/users')?>">User listing</a>
							</li>
							<li>
								<a href="<?php echo site_url('dashboard/users/create')?>">Add new users</a>
							</li>
							<li>
								<a href="<?php echo site_url('dashboard/groups')?>">Group</a>
							</li>
						</ul>
						<!-- /.nav-second-level -->
					</li>
					<?php endif;?>
					<li>
						<a <?php echo ($menu == 'password' ? 'class="active" ' : '')?>href="<?php echo site_url('dashboard/change-password')?>"><i class="fa fa-cog fa-fw"></i> Change Password</a>
					</li>
					<li>
						<a href="<?php echo site_url('auth/logout')?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
					</li>
				</ul>
			</div>
			<!-- /.sidebar-collapse -->
		</div>
		<!-- /.navbar-static-side -->
	</nav>