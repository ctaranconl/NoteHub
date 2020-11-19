<?php
	include_once 'header.php';
?>
        
        <h1>Pagina principal de la aplicación NoteHub.</h1>
        
	<?php
		$login = 0;
		if($login == 0){
			header("Location: login.php");
		}
    ?>

<?php
	include_once 'footer.php';
?>


