<?php	

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
	}
	
	$conn = mysql_connect("localhost","root", "", "break1");
	$query = "SELECT nombre_usuario, contrasena FROM break1.usuario WHERE nombre_usuario IN ('$user_name') AND contrasena IN ('$password')";
	$result = mysql_query($query) or die ("ERROR QUERY");
	if($comp = mysql_fetch_row($result))
	{
		echo "Ingreso";
	}
	else
	{
		echo "No ingreso";
	}


	
