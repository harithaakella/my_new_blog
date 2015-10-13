	<nav class="navbar navbar-default navbar-sticky">
		<div class="container-fluid">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			</div>
			
			<div class="navbar-collapse collapse">
				
				<ul class="nav navbar-nav">
					<li<?php echo ($menu == 'home' ? ' class="active"' : '')?>><a href="<?php echo site_url('/')?>">Home</a></li>
					<li<?php echo ($menu == 'about' ? ' class="active"' : '')?>><a href="<?php echo site_url('about')?>">About</a></li>
					<li<?php echo ($menu == 'blog' ? ' class="active"' : '')?>><a href="<?php echo site_url('blog')?>">Blog</a></li>
					<li><a href="<?php echo site_url('dashboard')?>">Dashboard</a></li>
				</ul>
			
			</div><!--/.nav-collapse -->			
		</div>	
	</nav>