<?php 
	$db = mysql_connect("localhost", "root", "", "break1");
	$query = "SELECT * FROM break1.ciudad";
	$ex_query = mysql_query($query);
	 
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
	   <meta charset="utf-8">
	   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	   <title>Break Register</title>
	   <meta name="description" content="">
	   <meta name="viewport" content="width=device-width, initial-scale=1">
	   <link rel="stylesheet" href="css/bootstrap.min.css">
	   <style>
		  body {
			 padding-top: 50px;
			 padding-bottom: 20px;
		  }
	   </style>
	   <link rel="stylesheet" href="css/bootstrap-theme.min.css">
	   <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
	   <!--[if lt IE 8]>
		  <p class="browserupgrade">Estas usando un navegador<strong>obsloteo</strong>. Porfavor actualiza tu navegador. <a href="http://browsehappy.com/">.</p>
	   <![endif]-->

	   <div class="container">
	   		<h1>Break Register</h1>
		<form class="form-horizontal" action="../php/result2.php" method="POST">
		  	<div class="form-group">
		    	<input type="text" class="form-control" name="user_name" id="user_name" placeholder="Ingrese su nombre de usuario">
		  	</div>
		  	<div class="form-group">
		    	<input type="text" class="form-control" name="user_email" id="user_email" placeholder="Ingrese su e-mail">
		  	</div>
		  	<div class="form-group">
		    		<label for="">Seleccione el tipo: </label>
		    		<label><input type="radio" name="tipoUsuario" value="usuario">Usuario</label>
		    		<label><input type="radio" name="tipoUsuario" value="proveedor">Proovedor</label>
		  	</div>
		  	<div class="form-group">
		    	<input type="text" class="form-control" name="user_cel" id="user_cel" placeholder="Ingrese su número de contacto">
		  	</div>

		  	<div class="form-group">
		  		<label for="user_ciudad">Seleccione su ciudad</label>
		    	<select name="user_ciudad" id="user_ciudad">
		    		<?php 
		    				while($row = mysql_fetch_array($ex_query)) {
								echo "<option>".$row['nombre_ciudad']."</option>";
							}
					 ?>
		    	</select>
		  	</div>
		  	<div class="form-group">
		    	<input type="text" class="form-control" name="user_dir" id="user_dir" placeholder="Ingrese su dirección">
		  	</div>

			<div class="form-group">
		    	<input type="text" class="form-control" name="user_banco" id="user_banco" placeholder="Ingrese su cuenta bancaria">
		  	</div>
			<div class="form-group">
		    	<input type="password" class="form-control" name="user_password" id="user_password" placeholder="Ingrese su contraseña">
		  	</div>
		  	<div class="form-group">
		    	<input type="password" class="form-control" name="user_passwordConfirm" id="user_passwordConfirm" placeholder="Vuelva a ingresar la contraseña">
		  	</div>

		  	<div class="btn-Container">
		  		<input  class="btn btn-success" type="submit" name="boton" id="access_button" value="Registrarse">
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
    		
    			text-align: left;
    		}
    		.btn-Container{
    			text-align: center;
    		}

    </style>
	<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
	<script src="js/vendor/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/vendor/bootstrap.min.js"></script>


	 

    </body>
</html>

<?php 
	mysql_close($db);
 ?>