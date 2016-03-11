<?php include ('inc/config.php'); ?>

<?php

  $pagename = "Home";

?>

<?php include ('inc/html-header.php'); ?>

	
	<section class="hero" id="hero">

		<div class="modal">
			<img src="img/mobile-icon.svg" class="close-modal-icon" id="close-modal-icon" alt="close window icon">

			<nav class="wrapper">
		        <ul>
		        	<li><a href="home.php">HOME</a></li>
		            <li><a href="about.php">ABOUT</a></li>
		            <li><a href="blog.php">BLOG</a></li>
		            <li><a href="reading.php">READING</a></li>
		            <li><a href="contact.php">CONTACT</a></li>
		        </ul>
	    	</nav>
		</div>

		<div class="navigation">
			<img src="img/mobile-icon.svg" alt="mobile navigation button" class="mobile-icon" id="mobile-icon">
			<!-- <img src="img/trademark.svg" alt="Todd Lewis trademark" class="trademark"> -->
			<nav>
		        <ul>
		            <li><a href="about.php">ABOUT</a></li>
		            <li><a href="blog.php">BLOG</a></li>
		            <li></li>
		            <li><a href="reading.php">READING</a></li>
		            <li><a href="contact.php">CONTACT</a></li>
		        </ul>
	    	</nav>
		</div>

		<div class="hero-overlay">
			<h1>Todd Lewis</h1>
	        <h4>Technology. Community. Entrepreneur.</h2>
	    </div>

	</section>

	<section class="main-content wrapper clearfix">
		
		<div class="thinking">

			<div class="main-title">
				<h3>What I'm</h3>
				<h2>Thinking</h2>
			</div>

			<!--POSTS GO HERE FROM WORDPRESS -->

			<a href="#">
				<div class="post-date">
					<p>March 21</p>
				</div>

				<div class="post-title">
				 	<h2>My predictions the future of open-source technology</h2>
				</div>
			</a>

			<a href="">
				<div class="post-date">
					<p>April 2</p>
				</div>

				<div class="post-title">
					<h2>Robotics and 3d printing, What to know and where we are headed</h2>
				</div>
			</a>

			<a href="#">
				<div class="post-date">
					<p>April 17</p>
				</div>

				<div class="post-title">
					<h2>My predictions the future of open-source technology</h2>
				</div>
			</a>
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
						<p>What are the jobs of the future? How many will there be? And who will have them? </p>
					</a>
				</div>
			</div>

			<div class="sharing">
				<div class="main-title">
					<h3>What I'm</h3>
					<h2>Sharing</h2>
				</div>
				<div class="twitter-post">
					<!--Book Feed-->
					<a href="#">
						<p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
						xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
						xxxxxxxxxxxxxxxxxxx</p>
					</a>
				</div>
			</div>
		</div>
		
	</section> <!--end of main page content -->

<?php include ('inc/footer.php'); ?>
<?php include ('inc/html-footer.php'); ?>
