<!DOCTYPE html>
<html>
<head>
	<title>Project JK</title>
	<meta charset="utf-8">
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

		<li class="active"><a href="index.php">Home</a></li>
		<li><a href="read.php">Blog</a></li>
		<li><a href="#" data-toggle="modal" data-target="#logdialog">Log in</a></li> <!--Button to loginform (id logdialog)  -->
        <li><a href="#" data-toggle="modal" data-target="#regdialog">Sign in</a></li><!--Button to regform (id regdialog) -->
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
<!--Koht, kus on Data-base ja väike kirjetus -->
<div class="container">
	<div class="jumbotron">
	<div class="text-center">
		<h1>Hello, World!</h1>
        <p><strong>NB!</strong> To see data-base area you should be log in-ed!</p>
		<a href="ladu.php" class="btn btn-info">Data-base</a>
	</div>
	</div>
</div>
<!--/Koht, kus on Data-base ja väike kirjetus -->
<!-- Articles -->
<div class="container">
	
	<div class="row">
        <div class="col-md-3">

        <h3><a href="read.php">Couple</a></h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </p>
        <a href="read.php" class="btn btn-default">Read More</a>
        
        </div>

        <div class="col-md-3">

        <h3><a href="read1.php">Waves</a></h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </p>
        <a href="read1.php" class="btn btn-default">Read More</a>
        
        </div>

        <div class="col-md-3">

        <h3><a href="read2.php">Night</a></h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </p>
        <a href="read2.php" class="btn btn-default">Read More</a>
        
        </div>

        <div class="col-md-3">

        <h3><a href="read3.php">Leopard</a></h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </p>
        <a href="read3.php" class="btn btn-default">Read More</a>
        
        </div>
	</div>
</div>
<!-- /Articles -->

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

<!-- Forms -->
<!-- Login form-->
<div class="modal" id="logdialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="form-signin-heading text-center">Sisselogimine vorm</h2>
            </div>
            <div class="modal-body">
                <form method="POST" id="logvorm" action="<?= $_SERVER['PHP_SELF']; ?>" class="form-signin">
                    <input type="hidden" name="action" value="login">
                    <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">

                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="text" name="kasutajanimi" class="form-control" placeholder="Email address" required=""
                           autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name="parool" class="form-control" placeholder="Password" required="">

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Logi sisse</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Login form-->
<!-- Regisrtation form -->
<div class="modal in" id="regdialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="form-signin-heading text-center">Registreerimis vorm</h2>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>" class="form-signin">
                    <input type="hidden" name="action" value="register">
                    <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">
                    <p><input type="text" name="kasutajanimi" class="form-control" placeholder="Email address"
                              required="" autofocus></p>

                    <p><input type="password" name="parool" class="form-control" placeholder="parool" required="">
                    </p>
                    <div class="text-center text-info">
                        <label>
                            Juba olemas kontot? <a href="#" data-toggle="modal" data-target="#logdialog">Logi sisse</a>!
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Registreeri</button>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Regisrtation form -->
<!-- /Forms -->






<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>



</body>
</html>