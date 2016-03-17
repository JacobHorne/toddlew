<?php include ('inc/config.php'); ?>

<?php

  $pagename = "Home";

?>

<?php include ('inc/html-header.php'); ?>
<?php include ('inc/header-alt.php'); ?>



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
