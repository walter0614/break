<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
	   <meta charset="utf-8">
	   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	   <title>Break Login</title>
	   <meta name="description" content="">
	   <meta name="viewport" content="width=device-width, initial-scale=1">
	   <link rel="apple-touch-icon" href="apple-touch-icon.png">

	   <link rel="stylesheet" href="css/bootstrap.min.css">
	   <style>
		  body {
			 padding-top: 50px;
			 padding-bottom: 20px;
		  }
	   </style>
	   <link rel="stylesheet" href="css/bootstrap-theme.min.css">
	   <link rel="stylesheet" href="css/main.css">

	   <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
	   <!--[if lt IE 8]>
		  <p class="browserupgrade">Estas usando un navegador<strong>obsloteo</strong>. Porfavor actualiza tu navegador. <a href="http://browsehappy.com/">.</p>
	   <![endif]-->

	   <div class="container">
	   		<h1>Break Login</h1>
		<form action="../php/result.php" method="POST">
		  	<div class="form-group">
		    		<label for="user_name">Nombre de Usuario</label>
		    		<input type="text" class="form-control" name="user_name" id="user_name" placeholder="Ingrese su nombre de usuario">
		  	</div>
		  	<div class="form-group">
		    		<label for="password">Contraseña:</label>
		    		<input type="password" class="form-control" name="password" id="password" placeholder="ingrese su contraseña">
		  	</div>
		  	<div class="btn-Container">
		  		<input  class="btn btn-success"type="submit" name="boton" id="access_button" value="Ingresar"> <br>
		  		<a href="#">¿Eres nuevo? Registrate</a>
		  	</div>
		  	
		</form>
	   </div>
	   


    <style type="text/css">
    		.container
    		{
    			text-align: center;
    			margin-top: 10%;
    			width: 300px;
    		}

    		form
    		{
    			text-align: left;
    		}
    		.btn-Container{
    			text-align: center;
    		}

    </style>
      	
    	
	 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

	 <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

	 <script src="js/vendor/bootstrap.min.js"></script>


	 

    </body>
</html>
