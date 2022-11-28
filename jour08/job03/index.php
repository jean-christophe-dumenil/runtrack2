<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>job03</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="prenom" placeholder="Entrez votre prénom">
        <input type="submit" value="Envoyer">
    </form>
    <br>
    <br>
    <?php
    
        // Ajouter le prénom dans le tableau
        
        if (isset($_POST['prenom'])) {
            $_SESSION['prenom'][] = $_POST['prenom'];
        }

    ?>

    <ul>
        <?php
            if (isset($_SESSION['prenom'])) {
                foreach ($_SESSION['prenom'] as $index => $value) {
                    echo '<li>' . $value . '</li>';
                } 
            }
        ?>
    </ul>

    <form action="" method="post">
        <br>
        <br>
        <label for="reset">Effacez la liste de prénom :</label><br>
        <input type='submit' value='reset' name='reset'>
        <br>
        <br>
    </form>

    <?php
    //reset
    if (isset($_POST['reset'])) {
        unset($_SESSION['prenom']);
    }

    ?>

</body>
</html>