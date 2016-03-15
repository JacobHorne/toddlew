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

			<div class="main-title underline">
				<h2>Contact</h2>
				<p>Lets Connect</p>

				<div class="social"> 
					<a href="twitter.com"><img src="img/twitter.svg"></a>
					<a href="linkedin.com"><img src="img/linkedin.svg"></a>
				</div>
			</div>

			

			<form>
				<input type="text" label="name" name="Name" placeholder="Name" />
				<input type="text" name="Email" placeholder="Email" />
				<textarea rows="25"type="text" name="Message" placeholder="Enter Your Message"></textarea>
			</form>
			<button>Submit</button>

	</section> <!--end of main page content -->

<?php include ('inc/footer.php'); ?>
<?php include ('inc/html-footer.php'); ?>
