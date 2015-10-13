<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="CodeIgniter 3 blog script by Pisyek Kumar">
	<meta name="author"      content="Pisyek Kumar (Pisyek.com)">
	
	<title><?php echo $this->config->item('site_name')?> - Post</title>

	<link rel="shortcut icon" href="<?php echo site_url('assets/img/gt_favicon.png')?>">
	
	<?php $this->view('front/_css')?>
	
</head>
<body class="home">

<header id="header">
	<div id="head" class="parallax" parallax-speed="1">
		<h1 id="logo" class="text-center">
			<img class="img-circle" src="<?php echo site_url('assets/img/guy.jpg')?>" alt="">
			<span class="title">Anthony Russel's Blog</span>
			<span class="tagline">A creative man is motivated by the desire to achieve, not by the desire to beat others.</span>
		</h1>
	</div>

	<?php $this->view('front/_menu')?>
	
</header>

<main id="main">

	<div class="container">
		
		<div class="row topspace">
			<div class="col-sm-8 col-sm-offset-2">
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
 			</div> 
			
		</div>
		
		<?php $this->view('front/blog-comment')?>
		
	</div>	<!-- /container -->

</main>

<footer id="footer" class="topspace">
	<div class="container">
		<div class="row">
			<div class="col-md-3 widget">
				<h3 class="widget-title">Contact</h3>
				<div class="widget-body">
					<p>+234 23 9873237<br>
						<a href="mailto:#">some.email@somewhere.com</a><br>
						<br>
						234 Hidden Pond Road, Ashland City, TN 37015
					</p>	
				</div>
			</div>

			<div class="col-md-3 widget">
				<h3 class="widget-title">Follow Pisyek</h3>
				<div class="widget-body">
					<p class="follow-me-icons">
						<a href="https://twitter.com/pisyek" class="twitter-follow-button" data-show-count="true">Follow @pisyek</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					</p>
				</div>
			</div>

			<div class="col-md-3 widget">
				<h3 class="widget-title">Text widget</h3>
				<div class="widget-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, nihil natus explicabo ipsum quia iste aliquid repellat eveniet velit ipsa sunt libero sed aperiam id soluta officia asperiores adipisci maxime!</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, nihil natus explicabo ipsum quia iste aliquid repellat eveniet velit ipsa sunt libero sed aperiam id soluta officia asperiores adipisci maxime!</p>
				</div>
			</div>

			<div class="col-md-3 widget">
				<h3 class="widget-title">Form widget</h3>
				<div class="widget-body">
					<p>+234 23 9873237<br>
						<a href="mailto:#">some.email@somewhere.com</a><br>
						<br>
						234 Hidden Pond Road, Ashland City, TN 37015
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
					<p>CodeIgniter 3 Blog created by <a href="http://pisyek.com" rel="follow">Pisyek Kumar</a></p>
				</div>
			</div>

			<div class="col-md-6 widget">
				<div class="widget-body">
					<p class="text-right">
						Copyright &copy; <?php echo date('Y')?>, Your awesome name here<br> 
						Design: <a href="http://www.gettemplate.com" rel="designer">Initio by GetTemplate</a> </p>
				</div>
			</div>

		</div> <!-- /row of widgets -->
	</div>
</footer>


<?php $this->view('front/_js')?>

</body>
</html>