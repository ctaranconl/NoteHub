<?php
	include_once 'header.php';
?>
        Hi <?php $n = htmlspecialchars($_POST['name']); echo $n;?>.
        You are <?php echo (int)$_POST['age']; ?> years old.

        <?php cuenta($n);?>
    </body>
</html>

<?php
    // comentario en php
    function cuenta($name){
        if($name == "ey"):
            echo "Cuéntame más.";
        else:
            echo "No me hables más.";
        endif;
    }
?>
<?php
	include_once 'footer.php';
?>
