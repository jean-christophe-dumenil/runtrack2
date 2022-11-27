<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Job 06</title>
    </head>
    <body>
        <form action="" method="get" class="formCol">
            <label for="nom">Largeur: </label>
            <input type="text" name="largeur" id="largeur"></br>

            <label for="nom">Longeur: </label>
            <input type="text" name="longueur" id="longeur"></br>

            <input type="submit" value="Envoyer!">
        </form>
        <?php   
            //for ($i = 0; $i < ; $i++) { 
            
            if($_GET['nombre']%2 == 1){
                    echo "Nombre impair";
                }
                else{
                    echo "Nombre pair";
                }
            //}
                
        ?>
    </body>
</html>