<?php include ('inc/config.php'); ?>

<?php

  $pagename = "Home";

?>

<?php include ('inc/html-header.php'); ?>

	
	<section class="contact-hero" id="hero">

		<div class="modal">
			<img src="img/mobile-icon.svg" class="close-modal-icon" id="close-modal-icon" alt="close window icon">

			<nav class="wrapper">
		        <ul>
		        	<li><a href="index.php">HOME</a></li>
		            <li><a href="googbout.php">ABOUT</a></li>
		            <li><a href="blog.php">BLOG</a></li>
		            <li><a href="reading.php">READING</a></li>
		            <li><a href="contact.php">CONTACT</a></li>
		        </ul>
	    	</nav>
		</div>

		<div class="navigation">
			<img src="img/mobile-icon.svg" alt="mobile navigation button" class="mobile-icon" id="mobile-icon">
			
			<nav>
		        <ul>
		            <li><a href="index.php">HOME</a></li>
		            <li><a href="blog.php">BLOG</a></li>

		            <li><a href="index.php"><img src="img/trademark.svg" alt="Todd Lewis trademark" class="trademark"></a></li>
		            
		            <li><a href="reading.php">READING</a></li>
		            <li><a href="contact.php">CONTACT</a></li>
		        </ul>
	    	</nav>
		</div>


	</section>

	<section class="main-content wrapper clearfix">

			<div class="main-title">
				<h2>Contact</h2>
			</div>
			<div class="reading">
				<form>
					<input type="text" label="name" name="Name" placeholder="Name" />
					<input type="text" name="Email" placeholder="Email" />
					<textarea rows="25"type="text" name="Message" placeholder="Message"></textarea>
				</form>
				<button>Submit</button>
			</div>

		
		
	</section> <!--end of main page content -->

<?php include ('inc/footer.php'); ?>
<?php include ('inc/html-footer.php'); ?>
