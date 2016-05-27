<!DOCTYPE html>
<html>
<head>
	<title>Project JK</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href = "css/bootstrap.min.css" rel = "stylesheet">
	<link href = "css/style.css" rel = "stylesheet">
	<link href = "styles.css" rel="stylesheet">
</head>
<body>
<!-- Slider, mis vahetab pilti -->
<div id = "myCarousel" class = "carousel slide">
	
	<ol class="carousel-indicators">
		<li data-target = "#myCarousel" data-slide-to = "0" class="active"></li>
		<li data-target = "#myCarousel" data-slide-to = "1"></li>
		<li data-target = "#myCarousel" data-slide-to = "2"></li>
	</ol>


	<div class="carousel-inner">

	<div class="item active">
		<img src="img/Beach.jpg" alt="Beach" class="img-responsive">
		<div class="carousel-caption">
			<h3>Beach</h3>
			<p>Jevgeni Kuzmin web-site</p>
		</div>
	</div>
	<div class="item">
		<img src="img/Sunset.jpg" alt="Sunset" class="img-responsive">
		<div class="carousel-caption">
			<h3>Sunset</h3>
			<p>Jevgeni Kuzmin web-site</p>
		</div>
	</div>
	<div class="item">
		<img src="img/Park.jpg" alt="Park" class="img-responsive">
		<div class="carousel-caption">
			<h3>Park</h3>
			<p>Jevgeni Kuzmin web-site</p>
		</div>
	</div>

</div>

<a class="carousel-control left" href="#myCarousel" data-slide="prev">
	<span class="icon-prev"></span>
</a>

<a class="carousel-control right" href="#myCarousel" data-slide="next">
	<span class="icon-next"></span>
</a>

</div>
<!-- /Slider, mis vahetab pilti -->
<!-- Navbar -->
<div class="navbar navbar-inverse navbar-static-top">
	<div class="container">
		
	<a href="index.php" class="navbar-brand">Welcome</a> 	

		<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">

			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	
		<div class = "collapse navbar-collapse navHeaderCollapse">

		<ul class="nav navbar-nav navbar-right">

		<li><a href="index.php">Home</a></li>
		<li><a href="read.php">Blog</a></li>
		<li class="dropdown">

		<a href="#" class="dropdown-toggle" data-toggle = "dropdown">Social Media <b class="caret"></b></a>
        <ul class="dropdown-menu">
        	<li><a href="http://twitter.com">Twitter</a></li>
        	<li><a href="http://facebook.com">Facebook</a></li>
        	<li><a href="http://plus.google.com">Google+</a></li>
        	<li><a href="http://instagram.com">Instagram</a></li>
        </ul>

		</li>
		<li class="active"><a href="about.php">About</a></li>
		<li><a href="#contact" data-toggle="modal">Contact</a></li>

		</ul>
	    </div>
	</div>
</div>
<!-- /Navbar -->
<!-- Koht kus te saate lugeda projecti kohta ja natuke minust -->
<div align="center" class="container">
	
	<div  class="row" >
	
	<div  class="col-lg-12">

		<div   class="panel panel-default">

			<div class="panel-body">

			<div class="page-header">
				<h3 align="center">About project</h3>
			</div>

			<img class="featuredImg" src="img/lake.jpeg" width="100%">

			<p>This project was created specially for subject at Estonian Information Technology College which name is "Võrgurakendused: klient-server". This prokect cames true thanks to Mr. Andris Reinman's lectures, videos on youtube, websites like bootstrap.com etc. Want to thank everyone who helped me!</p>

			<h4>About me</h4>

			<p>My name is Jevgeni Kuzmin, I am on my firs year at Estonian Information Technology College. I am interested in music, dancing, graphical-desine. My philosophy is "Everyday is a great day. Let's do something great together."</p>
				
			</div>

		</div>
	</div>
	</div>
</div>	
<!-- /Koht kus te saate lugeda projecti kohta ja natuke minust -->

<!-- Button, link to youtube -->
<div class="navbar navbar-default navbar-fixed-bottom">
	
	<div class="container">
		<p class="navbar-text pull-left">Site Built By Jevgeni Kuzmin</p>
		<a href="http://youtube.com" class="navbar-btn btn-danger btn pull-right">Subscribe on Youtube</a>
	</div>
</div>
<!--/ Button, link to youtube-->

<!-- Contact me form -->
<div class="modal fade" id="contact" role= "dialog">
	<div class="modal-dialog">
	<div class="modal-content">
		<form class="form-horizontal">
			<div class="modal-header">
				<h4>Contact Me</h4>
			</div>
				<div class="modal-body">

                	 <div class="form-group">
                 	
                 		<label for="contact-name" class="col-lg-2 control-label">Name:</label>
                 		<div class="col-lg-10">
                 			
                 			<input type="text" name="form-control" id="contact-name" placeholder="Full Name">
                 		</div>
                	 </div>

                	  	 <div class="form-group">
                 	
                 		<label for="contact-email" class="col-lg-2 control-label">Email:</label>
                 		<div class="col-lg-10">
                 			
                 			<input type="email" name="form-control" id="contact-email" placeholder="you@example.com">
                 		</div>
                	 </div>

                	  	 <div class="form-group">
                 	
                 		<label for="contact-msg" class="col-lg-2 control-label">Message:</label>
                 		<div class="col-lg-10">
                 			
                 			<textarea class="form-control" rows="6"></textarea>
                 		</div>
                	 </div>
				
				</div>
			<div class="modal-footer">
			<a class="btn btn-default" data-dismiss = "modal">Close</a>
			<button class="btn btn-primary" type="submit">Send</button>
			   	
			</div>
		</form>
	</div>
	</div>
</div>
<!-- /Contact me form -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>



</body>
</html>