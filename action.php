<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <script type="text/javascript">
    alert('GeeksforGeeks!');
</script>
    <body>
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
