<!DOCTYPE html>
<html>
<head>
	<title>Project JK</title>
	<meta charset="Utf-8">
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
		<li class="active"><a href="read.php">Blog</a></li>
		<li class="dropdown">

		<a href="#" class="dropdown-toggle" data-toggle = "dropdown">Social Media <b class="caret"></b></a>
        <ul class="dropdown-menu">
        	<li><a href="http://twitter.com">Twitter</a></li>
        	<li><a href="http://facebook.com">Facebook</a></li>
        	<li><a href="http://plus.google.com">Google+</a></li>
        	<li><a href="http://instagram.com">Instagram</a></li>
        </ul>

		</li>
		<li><a href="about.php">About</a></li>
		<li><a href="#contact" data-toggle="modal">Contact</a></li>

		</ul>
	    </div>
	</div>
</div>
<!-- /Navbar -->
<!-- Põhi artikkel -->
<div class="container">
<div class="row">
	
	<div class="col-lg-9">

		<div class="panel panel-default">

			<div class="panel-body">

			<div class="page-header">
				<h3>Leopard<small>  Posted on May 24th</small></h3>
			</div>

			<img class="featuredImg" src="img/Leopard.jpg" width="100%">

			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet nibh erat. Proin scelerisque nulla vitae turpis ultricies, eget convallis eros mollis. Sed ut dui vulputate, molestie massa a, euismod leo. Morbi sagittis tincidunt ligula, ac rutrum urna ultricies vel. Suspendisse suscipit mi id eleifend convallis. Integer ac porttitor sem. Sed placerat lorem odio, quis finibus augue interdum quis. Aenean fermentum fermentum ex ut pellentesque. Vestibulum id scelerisque nulla. Praesent elementum dapibus dictum. Duis efficitur convallis turpis, ut semper mauris viverra eu. Nunc commodo faucibus leo congue condimentum. Duis vel nisl convallis dui fringilla aliquet id in urna. Sed in scelerisque odio. Maecenas et iaculis lacus. Donec nec consectetur nunc.</p>

			<h4>A heading</h4>

			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet nibh erat. Proin scelerisque nulla vitae turpis ultricies, eget convallis eros mollis. Sed ut dui vulputate, molestie massa a, euismod leo. Morbi sagittis tincidunt ligula, ac rutrum urna ultricies vel. Suspendisse suscipit mi id eleifend convallis. Integer ac porttitor sem. Sed placerat lorem odio, quis finibus augue interdum quis. Aenean fermentum fermentum ex ut pellentesque. Vestibulum id scelerisque nulla. Praesent elementum dapibus dictum. Duis efficitur convallis turpis, ut semper mauris viverra eu. Nunc commodo faucibus leo congue condimentum. Duis vel nisl convallis dui fringilla aliquet id in urna. Sed in scelerisque odio. Maecenas et iaculis lacus. Donec nec consectetur nunc.</p>
				
			</div>

		</div>
	</div>
	<!-- Põhi artikkel -->
	<!-- Lisatud artiklid kõrval -->
	<div class="col-lg-3">

	<div class="list-group">
		<a href="read.php" class="list-group-item">
			<h4 class="list-group-item-heading">Couple</h4>
			<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet nibh erat.</p>
		</a>
		<a href="read1.php" class="list-group-item ">
			<h4 class="list-group-item-heading">Waves</h4>
			<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet nibh erat.</p>
		</a>
		<a href="read2.php" class="list-group-item ">
			<h4 class="list-group-item-heading">Night</h4>
			<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet nibh erat.</p>
		</a>
		<a href="read3.php" class="list-group-item active">
			<h4 class="list-group-item-heading">Leopard</h4>
			<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet nibh erat.</p>
		</a>
	</div>
		
	</div>
</div>
</div>
<!-- /Lisatud artiklid kõrval -->

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