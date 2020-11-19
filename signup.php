<?php
	include_once 'header.php';
?>
        
	<section class="signup-form">
		<h2>Regístrate</h2>
		<form action="signup.inc.php" class="signup-form-form" method="post">
			<input type="text" name="username" placeholder="Nombre de usuario">
			<input type="text" name="email" placeholder="Email">
			<input type="password" name="pwd" placeholder="Contraseña">
			<input type="password" name="pwdrepeat" placeholder="Repite la contraseña">
			<button type="submit" name="submit">Regístrate</button>
		</form>
	</section>

<?php
	include_once 'footer.php';
?>
