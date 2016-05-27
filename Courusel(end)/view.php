<!doctype HTML>
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

	</div>
</div>
<!-- /Navbar -->
    <style>
        #lisa-vorm {
            display: none;
        }
    </style>


   <!-- spetsiaalne Laoprogrammi vorm -->
<div class="container">
	
	<div class="jumbotron">
	<div class="modal-body">
    <div style="float: right;">
        <form method="post"  action="<?= $_SERVER['PHP_SELF']; ?>">
            <input type="hidden" name="action" value="logout">
            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">
            <button type="submit" class="btn btn-danger">Logi välja</button>
        </form>
     </div>   
		<div class="modal-header">
      	  <h2 class="text-center">Laoprogramm</h2>
   		</div>
   		<?php foreach (message_list() as $message): ?> 
<p style="border: 1px solid blue; background: #EEE;"> 
<?= $message; ?> 
</p> 
<?php endforeach; ?>
    <blockquote>
    <p id="kuva-nupp">
        <button type="button" class="btn btn-primary">Kuva lisamise vorm</button>
    </p>

    <form id="lisa-vorm" method="post" action="<?= $_SERVER['PHP_SELF']; ?>">

        <input type="hidden" name="action" value="add">
        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">
        
		
        <p id="peida-nupp">
            <button type="button" class="btn btn-warning">Peida lisamise vorm</button>
        </p>

        <table>
            <tr>
                <td>Nimetus</td>
                <td>
                    <input type="text" id="nimetus" name="nimetus">
                </td>
            </tr>
            <tr>
                <td>Kogus</td>
                <td>
                    <input type="number" id="kogus" name="kogus">
                </td>
            </tr>
        </table>

        <p>
            <button type="submit" class="btn btn-success">Lisa kirje</button>
        </p>
        

    </form>

    <table id="ladu" border="1">
        <thead>
            <tr>
                <th>Nimetus</th>
                <th>Kogus</th>
                <th>Tegevused</th>
            </tr>
        </thead>

        <tbody>

        <?php
        // koolon tsükli lõpus tähendab, et tsükkel koosneb HTML osast
        foreach (model_load($page) as $rida): ?>

            <tr>
                <td>
                    <?=
                        // vältimaks pahatahtlikku XSS sisu, kus kasutaja sisestab õige
                        // info asemel <script> tag'i, peame tekstiväljundis asendama kõik HTML erisümbolid
                        htmlspecialchars($rida['nimetus']);
                    ?>
                </td>
                <td>
                    <form method="post" action="<?= $_SERVER['PHP_SELF'];?>">
                        <input type="hidden" name="action" value="update">
                        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'];?>">
                        <input type="hidden" name="id" value="<?= $rida['id'];?>">

                        <input type="number" style="width: 5em; text-align: right;" name="kogus" value="<?= $rida['kogus']; ?>">
                        <button type="submit">Uuenda</button>
                    </form>
                </td>
                <td>

                    <form method="post" action="<?= $_SERVER['PHP_SELF'];?>">
                        <input type="hidden" name="action" value="delete">
                        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">
                        <input type="hidden" name="id" value="<?= $rida['id']; ?>">
                        <button type="submit">Kustuta rida</button>
                    </form>

                </td>
            </tr>

       <?php endforeach; ?>

        </tbody>
    </table>

    <p>
        <a href="<?= $_SERVER['PHP_SELF']; ?>?page=<?= $page - 1; ?>">
            Eelmine lehekülg
        </a>
        |
        <a href="<?= $_SERVER['PHP_SELF']; ?>?page=<?= $page + 1; ?>">
            Järgmine lehekülg
        </a>
    </p>
    </blockquote>
	</div>
	</div>
</div>

    <script src="ladu.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    
</body>

</html>
