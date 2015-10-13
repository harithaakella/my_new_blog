<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="CodeIgniter 3 blog script by Haritha Akella">
	<meta name="author"      content="Haritha Akella">
	
	<title><?php echo $this->config->item('site_name')?> - Blog</title>

	<link rel="shortcut icon" href="<?php echo site_url('assets/img/gt_favicon.png')?>">
	
	<?php $this->view('front/_css')?>
	
</head>
<body class="home">

<header id="header">
	<div id="head" class="parallax" parallax-speed="1">
		<h1 id="logo" class="text-center">
			<img class="img-circle" src="<?php echo site_url('assets/img/mb.jpg')?>" alt="">
			<span class="title">Posts Below...</span>
			
		</h1>
	</div>

	<?php $this->view('front/_menu')?>
	
</header>

<main id="main">

	<div class="container">
		
		<div class="row topspace">
			<div class="col-sm-8 col-sm-offset-2">
			<?php if($posts->count() < 1):?>
			
				<h2>No post yet!</h2>
			
			<?php else: ?>
			<?php foreach($posts as $post):?>
				<article class="post">
					<header class="entry-header">
						<div class="entry-meta"> 
							<span class="posted-on"><time class="entry-date published"><?php echo $post->created_at?></time></span>			
						</div>
						<h1 class="entry-title"><a href="<?php echo site_url('posts/'.$post->id)?>" rel="bookmark"><?php echo $post->title?></a></h1>
					</header>
					<div class="entry-content">
						<?php echo $post->content?>
					</div>
				</article>
 			<?php endforeach; endif;?>
			</div> 
			
		</div>
		
		<div class="text-center">
			<?php echo $links; ?>
		</div>

	</div>	<!-- /container -->

</main>

<footer id="footer" class="topspace">
	<div class="container">
		<div class="row">
			<div class="col-md-3 widget">
				<h3 class="widget-title">Contact</h3>
				<div class="widget-body">
					<p>+234 23 9873237<br>
						<a href="mailto:#">harithaakella@boisestate.edu</a><br>
						<br>
						2501 E red cedar ln , Boise , ID, 83716
					</p>	
				</div>
			</div>

			<div class="col-md-3 widget">
				<h3 class="widget-title">Follow Haritha</h3>
				<div class="widget-body">
					<p class="follow-me-icons">
						<a href="https://twitter.com/akella_haritha" class="twitter-follow-button" data-show-count="true">Follow @Haritha</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					</p>
				</div>
			</div>

			<div class="col-md-3 widget">
				<h3 class="widget-title">Text widget</h3>
				<div class="widget-body">
					<p>This is sample blog created by me.. Do you like it? Then follow me on twitter</p>
					<p>Do you guys love blogging?? Why dont you join me? Let us rock..</p>
				</div>
			</div>

			<div class="col-md-3 widget">
				<h3 class="widget-title">Form widget</h3>
				<div class="widget-body">
					<p>+234 23 9873237<br>
						<a href="mailto:#">harithaakella@boisestate</a><br>
						<br>
						2501 E red cedar ln , boise , idaho , 83716
					</p>	
				</div>
			</div>

		</div> <!-- /row of widgets -->
	</div>
</footer>

<footer id="underfooter">
	<div class="container">
		<div class="row">
			
			<div class="col-md-6 widget">
				<div class="widget-body">
					<p>CodeIgniter 3 Blog created by <a href="https://www.facebook.com/akella.haritha" rel="follow">Haritha Akella</a></p>
				</div>
			</div>

			<div class="col-md-6 widget">
				<div class="widget-body">
					<p class="text-right">
						Copyright &copy; <?php echo date('Y')?>, Haritha Akella<br> 
						Design: <a href="http://www.gettemplate.com" rel="designer">Initio by GetTemplate</a> </p>
				</div>
			</div>

		</div> <!-- /row of widgets -->
	</div>
</footer>


<?php $this->view('front/_js')?>

</body>
</html>