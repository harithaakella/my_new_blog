<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="CodeIgniter 3 blog script by Haritha Akella">
	<meta name="author"      content="Haritha Akella">
	
	<title><?php echo $this->config->item('site_name')?> - Haritha</title>

	<link rel="shortcut icon" href="<?php echo site_url('assets/img/gt_favicon.png')?>">
	
	<?php $this->view('front/_css')?>
	
</head>
<body class="home">

<header id="header">
	<div id="head" class="parallax" parallax-speed="2">
		<h1 id="logo" class="text-center">
			<img class="img-circle" src="<?php echo site_url('assets/img/girl.jpg')?>" alt="">
			<span class="title">Welcome</span>
			<span class="tagline">To my blog...<br>
				<a href="">harithaakella@boisestate.edu</a></span>
		</h1>
	</div>

	<?php $this->view('front/_menu')?>
	
</header>

<main id="main">

	<div class="container">
		
		<div class="row section topspace">
			<div class="col-md-12">
				<p class="lead text-center text-muted">change the rules & rule the changes </p>
			</div>
		</div> <!-- / section -->
		
		<div class="row section featured topspace">
			<h2 class="section-title"><span>DESCRIPTION</span></h2>
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">HOME</h3>
					<p>Hi everyone , I have three interesting hobbies! Firstly watching <b>NEWS </B>. <br>
					Secondly building <b>Mobile Apps </b> , Last but not the least , writing <b>blogs</b>. I have my favorite fields of interest on which i write blogs. Have mentioned in this page about the same.
					Please scroll below for the details of the same.</p>
					<p class="text-center"><a href="http://localhost/my_new_blog/" class="btn btn-action">Read more</a></p>
				</div>
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">ABOUT</h3>
					<p>Please click on the About Tab , to know more about me!<br> Am a fun loving girl with interest in extra curricular activities!<br> Am married to Kishore Bhagavatula , love of my life an year back!
					<br>I have lots of interest in blogging and my fields of interest on which i write blogs.</p>
					
					<p class="text-center"><a href="http://localhost/my_new_blog/about" class="btn btn-action">Read more</a></p>
				</div>
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">BLOG</h3>
					<p> Please visit my blogs page , to view all my interesting blogs. Hope you all enjoy them!<br> It has blogs from various fields , like woman empowerment , environment - as am a great naure lover! 
					<br>PLease let me know your views on the comments and if you like my blogs.</p>
					<p class="text-center"><a href="http://localhost/my_new_blog/blog" class="btn btn-action">Read more</a></p>
				</div>
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">DASHBOARD</h3>
					<p>It is dashboard view for the admin.<br> I login here to find all the comments that I have received and the number of views and blogs time stamps historical data.
					<br> This is a very useful tool for me.
					<br> I very regularly check my dashboard to analyse the views of majority of people who are my recent bloggers.</p>
					<p class="text-center"><a href="http://localhost/my_new_blog/dashboard" class="btn btn-action">Read more</a></p>
				</div>
			</div>
		</div> <!-- / section -->
		
		<div class="row section clients topspace">
			<h2 class="section-title"><span>BLOG TOPICS</span></h2>
			<div class="col-lg-12">
				<p>
					<img src="<?php echo site_url('assets/img/browser_types.jpg')?>" alt="">
					
				</p>
			</div>
		</div> <!-- /section -->
		
		<div class="blogs items">
			
			<h2 class="section-title"><span>BLOGS</span></h2>
			
			<div class="thumbnails recentworks row">
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="http://localhost/my_new_blog/blog">
						<span class="img">
							<img src="<?php echo site_url('assets/img/me.jpg')?>" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">WANNA KNOW ABOUT ME?</span>
					</a>
			
					<h4></h4>
					<p></p>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="http://localhost/my_new_blog/blog">
						<span class="img">
							<img src="<?php echo site_url('assets/img/nature.jpg')?>" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">NATURE</span>
					</a>
				
					<h4></h4>
					<p></p>
				</div>
				
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="http://localhost/my_new_blog/blog">
						<span class="img">
							<img src="<?php echo site_url('assets/img/car.jpg')?>" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">BIG DATA</span>
					</a>
					
					<h4></h4>
					<p></p>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="http://localhost/my_new_blog/blog">
						<span class="img">
							<img src="<?php echo site_url('assets/img/pop.jpg')?>" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">POPULAR BLOG</span>
					</a>
					
					<h4></h4>
					<p></p>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="http://localhost/my_new_blog/blog">
						<span class="img">
							<img src="<?php echo site_url('assets/img/empower.jpg')?>" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">WOMAN EMPOWERMENT</span>
					</a>
					
					<h4></h4>
					<p></p>
				</div>

			</div>
			</div> <!-- /section -->
			
			<div class="news items">
			
			<h2 class="section-title"><span>FEATURED BLOGS</span></h2>
			
			<div class="thumbnails recentworks row">
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="http://localhost/my_new_blog/blog">
						<span class="img">
							<img src="<?php echo site_url('assets/img/pop.jpg')?>" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">POPULAR BLOG</span>
					</a>
					
					<h4></h4>
					<p></p>
				</div>

			
			
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="http://localhost/my_new_blog/blog">
						<span class="img">
							<img src="<?php echo site_url('assets/img/car.jpg')?>" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">BIG DATA</span>
					</a>
					
					<h4></h4>
					<p></p>
				</div>
				
				

		</div> <!-- /section -->
		<div class="news items">
			
			<h2 class="section-title"><span>NEWS</span></h2>
			
			<div class="thumbnails recentworks row">
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="http://www.ibnlive.com/blog/">
						<span class="img">
							<img src="<?php echo site_url('assets/img/cnnibn.jpg')?>" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">CNN -IBN News</span>
					</a>
					
					<h4></h4>
					<p></p>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="http://www.foxnews.com/">
						<span class="img">
							<img src="<?php echo site_url('assets/img/fox.jpg')?>" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">FOX News</span>
					</a>
				
					<h4></h4>
					<p></p>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="http://www.bbc.com/news/world">
						<span class="img">
							<img src="<?php echo site_url('assets/img/bbcnews.jpg')?>" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">BBC NEWS</span>
					</a>
					
					<h4></h4>
					<p></p>
				</div>

			</div>

		</div> <!-- /section -->

		<div class="row section topspace">
			<div class="panel panel-cta"><div class="panel-body">
				<div class="col-lg-8">
					<p>A simple, easy way to build <b>Mobile Apps</b> which has support on various browsers mentioned below. </p>
				</div>
				<div class="col-lg-4 text-right">
					<a href="http://www.como.com/" class="btn btn-primary btn-lg">Conduit Platform</a>
				</div>
			</div></div>
		</div> <!-- /section -->

		

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
						<a href="mailto:#">harithaakella@u.boisestate.edu</a><br>
						<br>2501 E red cedar ln , boise , idaho 8371615
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