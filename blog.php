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
		        	<li><a href="home.php">HOME</a></li>
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
				<h2>Thinking</h2>
			</div> -->

			<!--POSTS GO HERE FROM WORDPRESS -->

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
					<h2>The feds aren’t ready for the future of self-driving cars. Open Source Reigns</h2>
				</div>
			</a>
			<button>MORE</button>
		</div>
		
	</section> <!--end of main page content -->

<?php include ('inc/footer.php'); ?>
<?php include ('inc/html-footer.php'); ?>
