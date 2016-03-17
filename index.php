<?php include ('inc/config.php'); ?>

<?php

  $pagename = "Home";

?>

<?php include ('inc/html-header.php'); ?>
<?php include ('inc/header.php'); ?>
	
	<section class="hero" id="hero">

		<div class="hero-overlay">
			<h1>Todd Lewis</h1>
	        <h4>Technology. Community. Entrepreneur.</h2>
	    </div>

	</section>

	<section class="main-content wrapper clearfix">
		
		<div class="blog">

			<div class="main-title">
				<h3>What I'm</h3>
				<h2>Thinking</h2>
			</div>

			<!--POSTS GO HERE FROM WORDPRESS -->

			<a href="page.php" class="post">
				<div class="post-date">
					<p>March 21</p>
				</div>

				<div class="post-title">
				 	<h2>My predictions the future of open-source technology</h2>
				</div>
			</a>

			<a href="#" class="post">
				<div class="post-date">
					<p>April 2</p>
				</div>

				<div class="post-title">
					<h2>Robotics and 3d printing, What to know and where we are headed</h2>
				</div>
			</a>

			<a href="#" class="post">
				<div class="post-date">
					<p>April 17</p>
				</div>

				<div class="post-title">
					<h2>The feds aren’t ready for the future of self-driving cars. Open Source Reigns</h2>
				</div>
			</a>
			<button>MORE</button>
		</div>

		<div class="side-bar clearfix">

			<div class="reading">
				<div class="main-title">
					<h3>What I'm</h3>
					<h2>Reading</h2>
				</div>

				<div class="book-post">
					<!--Book Feed-->
					<a href="#">
						<img src="img/rise-of-robots.jpg" alt"Picture of the book Rise of the Robots">
						<p>Click and be taken to a blog post about the book I regularly think about many of the issues brought up in this must-read book, and it's vital people begin to do so as well. </p>
					</a>
				</div>
				<a href="reading.php"><button>MORE</button></a>
			</div>

			<div class="sharing">
				<div class="main-title">
					<h3>What I'm</h3>
					<h2>Sharing</h2>
				</div>
				<div class="twitter-post">
					<!--Book Feed-->
					<a href="#">
						<p>LOREM ISPUM qlwd dlknql knqwklndkqwndlqwndqwd wdqwszlxknzk</p>
					</a>
				</div>
			</div>
			<button>MORE</button>
		</div>
		
	</section> <!--end of main page content -->

<?php include ('inc/footer.php'); ?>
<?php include ('inc/html-footer.php'); ?>
