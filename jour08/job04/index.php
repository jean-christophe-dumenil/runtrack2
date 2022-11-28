<?php
    
    if (isset($_POST['prenom'])){
        setcookie('prenom', $_POST['prenom'], time() + 365*24*3600);
        $_COOKIE['prenom'] = $_POST['prenom'];
    }
    else if (isset($_POST['deco'])){
        setcookie('prenom', '', time() - 3600);
        $_COOKIE['prenom'] = null;
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job04</title>
</head>
<body>
    <?php
        if (isset($_COOKIE['prenom'])) {    //déjà connecté
            echo 'Bonjour ' . $_COOKIE['prenom'] . ' !<br><br>';
            echo "<form action='' method='post'>
                <input type='submit' value='Déco' name='deco'>
            </form>";
        }
        else { // Pas encore connecté
            echo 'Bonjour !<br>';
            echo 'Entrez votre prénom pour vous connecter <br>';
            echo "<form action='' method='post'>
                <input type='text' name='prenom' placeholder='Entrez votre prénom'>
                <input type='submit' value='connexion'>
                </form>
            <br>
            <br>";
        }
    ?>

</body>
</html>