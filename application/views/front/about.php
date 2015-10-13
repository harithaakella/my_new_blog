<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="CodeIgniter 3 blog script by Haritha Akella">
	<meta name="author"      content="Haritha Akella)">
	
	<title><?php echo $this->config->item('site_name')?> - About</title>

	<link rel="shortcut icon" href="<?php echo site_url('assets/img/gt_favicon.png')?>">
	
	<?php $this->view('front/_css')?>
	
</head>
<body class="home">

<header id="header">
	<div id="head" class="parallax" parallax-speed="2">
		<h1 id="logo" class="text-center">
			<img class="img-circle" src="<?php echo site_url('assets/img/gal.jpg')?>" alt="">
			<span class="title">Haritha</span>
			<span class="tagline">Those who like me raise your hands , Others? - Raise your standards! .</span>
				
		</h1>
	</div>

	<?php $this->view('front/_menu')?>
	
</header>

<main id="main">

	<div class="container">
		
		<div class="row topspace">
			
			<!-- Sidebar -->
			<aside class="col-sm-4 sidebar sidebar-right">

				<ul class="nav text-right nav-side">
					<li class="active"><a href="#ui">BSU Graduate Assistant</a></li>
					<li><a href="#frontend">Passionate for Web Development</a></li>
					<li><a href="#backend">Worked at Computer Associates.Inc</a></li>
					<li><a href="#projects">Loves Dancing</a></li>
				</ul>

			</aside>
			<!-- /Sidebar -->

			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
				<p>This is a sample BLOG created by me for enterprise web development class</p>
				
				
				<h3>About Me</h3>
				<p><img src="<?php echo site_url('assets/img/cp.jpg')?>" alt="" class="" width="30%" ></p>
				<p><blue>I am Haritha working as a <b>graduate assistant</b> at Boise state university.
				I have a lot of<b> passion for Web development</b> since my schooling..!! If you love coding , web development , please follow my blogs and comment.I love interactive community of coders.
				I <b>worked at Computer Associates</b> as a associate platform administrator for 18 months after which I met Kishore , love of my life and moved to Texas after getting married on Dec 18!
				<b>Dancing</b> is my all time favorite hobby..! Classical dance is one of my favorites.
				
				</blue></p>
				<h3>About Class</h3>
				<p><img src="<?php echo site_url('assets/img/class.jpg')?>" alt="" class="" width="50%" ></p>
				<p> One of the best classes , I have ever attended! Conrad Kennington is such a cool person. He knows the best of tactics to handle a class of adults.</p>
			</article>
			<!-- /Article -->
			

		</div>
		
	</div>	<!-- /container -->

</main>

<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3 widget">
				<h3 class="widget-title">Contact</h3>
				<div class="widget-body">
					<p>+234 23 9873237<br>
						<a href="mailto:#">harithaakella@u.boisestate.edu</a><br>
						<br>
						2501 E red cedar ln , boise , idaho 83716
					</p>	
				</div>
			</div>

			<div class="col-md-3 widget">
				<h3 class="widget-title">Follow Haritha</h3>
				<div class="widget-body">
					<p class="follow-me-icons">
						<a href="https://twitter.com/akella_haritha" class="twitter-follow-button" data-show-count="true">Follow @akella</a>
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
						<a href="mailto:#">harithaakella@u.boisestate.edu</a><br>
						<br>2501 E red cedar ln , boise , idaho 83716
						
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