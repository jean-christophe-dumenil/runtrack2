<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Job 05</title>
    </head>
    <body>
        <form action="" method="post" class="formCol">
            <label for="nom">Quel est votre username: </label>
            <input type="text" name="username" id="username"></br>

            <label for="prenom">Quel est votre password: </label>
            <input type="text" name="password" id="password"></br>

            <input type="submit" value="Envoyer!">
        </form>
        <?php   
            if(($_POST['username'] != "John") && ($_POST['password'] != "Rambo")){
                    echo "Votre pire cauchemar";
                }
                elseif (($_POST['username'] == "John") && ($_POST['password'] == "Rambo")){
                    echo "C'est pas ma guerre";
                }
            
                
        ?>
    </body>
</html>