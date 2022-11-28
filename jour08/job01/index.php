<?php
    //On démarre une nouvelle session
    session_start();
    
    //Si variable déjà créée, rajouter 1, sinon écrire 1
    isset($_SESSION['nbvisites']) ?  $_SESSION['nbvisites']++ : $_SESSION['nbvisites'] = 1;

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Job 01</title>
    </head>
    <body>
    <form action="" method="post">
        <br>
        <br>
        <label for="reset">Remettre à zéro le compteur de visite :</label><br>
        <input type='submit' value='reset' name='reset'>
        <br>
        <br>
    </form>

    <?php
        if (isset($_POST['reset'])) {
            $_SESSION['nbvisites'] = 1;
        }
        echo 'La page a été visité <b>' . $_SESSION['nbvisites'] . '</b> fois';
    ?>
    </body>
</html>