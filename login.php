<?php
	include_once 'header.php';
?>
        
	<section class="signup-form">
		<h2>Entrar</h2>
		<form action="includes/login.inc.php" method="post" class="signup-form-form">
			<input type="text" name="username" placeholder="Nombre de usuario/Email">
			<input type="password" name="pwd" placeholder="Contraseña">
			<button type="submit" name="submit">Entrar</button>
		</form>
		
		<?php
		if(isset($_GET["error"])){
			if($_GET["error"] == "emptyinput"){
				echo "<p>Rellena todos los campos</p>";
			}
			else if($_GET["error"] == "wronglogin"){
				echo "<p>El nombre de usuario o la contraseña son incorrectos</p>";
			}
		}
		?>
		
	</section>

<?php
	include_once 'footer.php';
?>
