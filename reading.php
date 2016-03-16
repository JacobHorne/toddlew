<?php include ('inc/config.php'); ?>

<?php

  $pagename = "Home";

?>

<?php include ('inc/html-header.php'); ?>

	<div class="navigation inverse-header">
		<img src="img/mobile-icon-dark.svg" alt="mobile navigation button" class="mobile-icon" id="mobile-icon">
		<nav>
		    <ul>
		        <li><a href="about.php">ABOUT</a></li>
		        <li><a href="blog.php">BLOG</a></li>

		        <li><a href="index.php"><img src="img/trademark-dark.svg" alt="Todd Lewis trademark" class="trademark"></a></li>

		        <li><a href="reading.php">READING</a></li>
		        <li><a href="contact.php">CONTACT</a></li>
		    </ul>
	    </nav>
	</div>

	<div class="modal">
			<!-- <img src="img/mobile-icon.svg" class="close-modal-icon" id="close-modal-icon" alt="close window icon"> -->

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

	<section>

	</section>

	<section class="main-content clearfix">
		
		<div class="center">
			<div class="book-post">

				<a href="#">
					<h2 class="underline">Rise of the Robots</h2>
					<img src="img/rise-of-robots.jpg" alt"Picture of the book Rise of the Robots">
					<p>Click and be taken to a blog post about the book I regularly think about many of the issues brought up in this must-read book, and it's vital people begin to do so as well. </p>
				</a>
			</div>
			<div class="book-post">
				<!--Book Feed-->
				<a href="#">
					<h2>The Best Technology Writing </h2>
					<img src="img/technology.jpg" alt"Picture of the book the best technology writing">
					<p>Click and be taken to a blog post about the book I regularly think about many of the issues brought up in this must-read book, and it's vital people begin to do so as well. </p>
				</a>
			</div>
			<div class="book-post">
				<!--Book Feed-->
				<h2>Appollo Moon Missions</h2>
				<a href="#">
					<img src="img/apollo.jpg" alt"Picture of the book Rise of the Robots">
					<p>Click and be taken to a blog post about the book I regularly think about many of the issues brought up in this must-read book, and it's vital people begin to do so as well. </p>
				</a>
			</div>
		</div>
		<button>MORE</button>
		
	</section> <!--end of main page content -->

<?php include ('inc/footer.php'); ?>
<?php include ('inc/html-footer.php'); ?>
