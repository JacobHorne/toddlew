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

	<section class="main-content wrapper clearfix">
		
		<div class="center">

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
					<h2>Where are the Unicorns?</h2>
				</div>
			</a>
			<a href="#" class="post">
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
					<h2>Open Souce Technology for self driving automation</h2>
				</div>
			</a>
			<button>MORE</button>
		</div>
	</section> <!--end of main page content -->

<?php include ('inc/footer.php'); ?>
<?php include ('inc/html-footer.php'); ?>
