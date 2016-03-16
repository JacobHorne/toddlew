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

			<a href="#" class="post">
				<div class="post-date">
					<p>March 21</p>
				</div>

				<div class="page">
				 	<h2>My predictions for the future of open-source technology</h2>

				 	<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p></br>

				 	<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p></br>

				 	<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p></br>

				</div>
			</a>

			<button>MORE</button>
		</div>
	</section> <!--end of main page content -->

<?php include ('inc/footer.php'); ?>
<?php include ('inc/html-footer.php'); ?>
