<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Job 02</title>
    </head>
    <body>
        <form action="" method="get" class="formCol">
            <label for="nom">Quel est votre nom: </label>
            <input type="text" name="nom" id="nom"></br>

            <label for="prenom">Quel est votre prenom: </label>
            <input type="text" name="prenom" id="prenom"></br>

            <label for="age">Quel est votre age: </label>
            <input type="text" name="age" id="age"></br>

            <input type="submit" value="Envoyer!">
        </form>
        <?php   
            
            echo '<table>
            <tr>
                <th>Argument</th>
                <th>Valeur</th>
            </tr>
            <tr>
                <th>Nom</th>
                <th>'.$_GET["nom"].'</th>
            </tr>

            <tr>
                <th>Prénom</th>
                <th>'.$_GET["prenom"].'</th>
            </tr>

            <tr>
                <th>Age</th>
                <th>'.$_GET["age"].'</th>
            </tr>
           
            </table>';
        ?>
    </body>
</html