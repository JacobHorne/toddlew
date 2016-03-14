<?php include ('inc/config.php'); ?>

<?php

  $pagename = "Home";

?>

<?php include ('inc/html-header.php'); ?>

	
	<section>

		<div class="modal">
			<img src="img/mobile-icon.svg" class="close-modal-icon" id="close-modal-icon" alt="close window icon">

			<nav class="wrapper">
		        <ul>
		        	<li><a href="index.php">HOME</a></li>
		            <li><a href="about.php">ABOUT</a></li>
		            <li><a href="blog.php">BLOG</a></li>
		            <li><a href="reading.php">READING</a></li>
		            <li><a href="contact.php">CONTACT</a></li>
		        </ul>
	    	</nav>
		</div>

		<!-- <div class="navigation">
			<img src="img/mobile-icon.svg" alt="mobile navigation button" class="mobile-icon" id="mobile-icon">
			
			<nav>
		        <ul>
		            <li><a href="about.php">ABOUT</a></li>
		            <li><a href="blog.php">BLOG</a></li>

		            <li><a href="index.php"><img src="img/trademark.svg" alt="Todd Lewis trademark" class="trademark"></a></li>

		            <li><a href="reading.php">READING</a></li>
		            <li><a href="contact.php">CONTACT</a></li>
		        </ul>
	    	</nav>
		</div> -->

	</section>

	<section class="main-content wrapper clearfix">
		
		<div class="thinking sub-page">

			<!-- <div class="main-title larger">
				<h3>What I'm</h3>
				<h2>Reading</h2>
			</div> -->

			<!--POSTS GO HERE FROM WORDPRESS -->

			<div class="book-post">
				<!--Book Feed-->
				<a href="#">
					<img src="img/rise-of-robots.jpg" alt"Picture of the book Rise of the Robots">
					<p>Click and be taken to a blog post about the book I regularly think about many of the issues brought up in this must-read book, and it's vital people begin to do so as well. </p>
				</a>
			</div>
			<div class="book-post">
				<!--Book Feed-->
				<a href="#">
					<img src="img/technology.jpg" alt"Picture of the book Rise of the Robots">
					<p>Click and be taken to a blog post about the book I regularly think about many of the issues brought up in this must-read book, and it's vital people begin to do so as well. </p>
				</a>
			</div>
			<div class="book-post">
				<!--Book Feed-->
				<a href="#">
					<img src="img/apollo.jpg" alt"Picture of the book Rise of the Robots">
					<p>Click and be taken to a blog post about the book I regularly think about many of the issues brought up in this must-read book, and it's vital people begin to do so as well. </p>
				</a>
			</div>
		</div>
		
	</section> <!--end of main page content -->

<?php include ('inc/footer.php'); ?>
<?php include ('inc/html-footer.php'); ?>
