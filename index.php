<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h2>RETURN INTERNET BROWSER</h2>
        <?php
            echo $_SERVER['HTTP_USER_AGENT'];
            if(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE){
                echo("<p>Estás usando Google Chrome</p>");
        ?>
        <h2>STRTOUPPER</h2>
        <?php
            $strMay = '<br> Hola buenas tardes me llamo carlos';
            $strMay =  strtoupper($strMay);
            echo $strMay;
            echo "<br>";
            echo strlen($strMay);
        ?>
        <h2>FIND STR POSITION</h2>
        <?php
            $strComplete = "Una vez me cai jugando al futbol";
            $strToFind = "jugando";
            $pos = strpos($strComplete, $strToFind);
            echo "<br> La palabra '";
            echo (string)$strToFind;
            echo "' se encuentra en la posición ";
            echo $pos;
        }else{
            echo("<p>No estás usando Google Chrome</p>");
        }
         ?>

         <h1>FORM</h1>
         <form action="action.php" method="post">
             <p>Your name: <input type="text" name="name" /></p>
             <p>Your age: <input type="text" name="age" /></p>
             <p><input type="submit" /></p>
        </form>

    </body>
</html>
