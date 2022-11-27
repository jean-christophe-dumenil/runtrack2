<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Job 06</title>
    </head>
    <body>
        <form action="" method="get" class="formCol">
            <label for="nom">Entrez le nombre de votre choix: </label>
            <input type="text" name="nombre" id="nombre"></br>

            <input type="submit" value="Envoyer!">
        </form>
        <?php   
            
            if($_GET['nombre']%2 == 1){
                    echo "Nombre impair";
                }
                else{
                    echo "Nombre pair";
                }
           
                
        ?>
    </body>
</html>