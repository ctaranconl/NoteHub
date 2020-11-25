<?php
	session_start();
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>NoteHub</title>
		<link rel="stylesheet" href="css/styles.css" type="text/css">
    </head>
    <body>
    	<div class = "logo">
    		<img src=""/>
    	</div>
    	<div class = "topnav">
			<a class="active" href="index.php">NoteHub</a>
			<?php
				if(isset($_SESSION["userid"])){
					$username = $_SESSION["username"];
					echo "<a class='rightnav active' style='color:#ff9191;' href='profile.php'>$username</a>";
					echo "<a class='rightnav' href='logout.php'>Salir</a>";
				}
				else{
					echo "<a class='rightnav' href='signup.php'>Registrarse</a>";
					echo "<a class='rightnav' href='login.php'>Entrar</a>";
				}
			?>
			
			
		</div>
		<!--div class = "usertopnav">
			<a href="#">Perfil<a/>
			<a href="#">Perfil<a/>
			<a href="#">Perfil<a/>
			<div>
				<a href="#">Perfil
				<img class="profileicon" src="images/profileicon.svg">
				<a/>
			</div>
		</div>-->
	<div class="wrapper">

