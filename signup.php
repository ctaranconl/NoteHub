<?php
	include_once 'header.php';
?>
        
	<section class="signup-form">
		<h2>Regístrate</h2>
		<form action="includes/signup.inc.php" class="signup-form-form" method="post">
			<input type="text" name="username" placeholder="Nombre de usuario">
			<input type="text" name="email" placeholder="Email">
			<input type="password" name="pwd" placeholder="Contraseña">
			<input type="password" name="pwdrepeat" placeholder="Repite la contraseña">
			<button type="submit" name="submit">Regístrate</button>
		</form>
		
		<?php
		if(isset($_GET["error"])){
			if($_GET["error"] == "emptyinput"){
				echo "<p>Rellena todos los campos</p>";
			}
			else if($_GET["error"] == "invalidusername"){
				echo "<p>El nombre de usuario no es válido</p>";
			}
			else if($_GET["error"] == "invalidemail"){
				echo "<p>El email no es válido</p>";
			}
			else if($_GET["error"] == "pwdnotequal"){
				echo "<p>Las contraseñas no coinciden</p>";
			}
			else if($_GET["error"] == "usernameexists"){
				echo "<p>El nombre de usuario ya existe</p>";
			}
			else if($_GET["error"] == "stmtfailed"){
				echo "<p>Ha ocurrido un problema</p>";
			}
			else if($_GET["error"] == "none"){
				header("location: /index.php");
			}
		}
		?>
	</section>
	
<?php
	include_once 'footer.php';
?>
