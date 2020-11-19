<?php
	include_once 'header.php';
?>
        
	<section class="signup-form">
		<h2>Entrar</h2>
		<form action="login.inc.php" method="post" class="signup-form-form">
			<input type="text" name="username" placeholder="Nombre de usuario/Email">
			<input type="password" name="pwd" placeholder="Contraseña">
			<button type="submit" name="submit">Entrar</button>
		</form>
	</section>

<?php
	include_once 'footer.php';
?>
