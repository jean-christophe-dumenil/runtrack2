<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Job 06</title>
    </head>
    <body>
        <?php          
            // déclaration de variables
            $str = "Les choses que l on possede finissent par nous posseder.";
            $clean = '';

            //algorithme
            for ($i = 0; $i < strlen($str); $i++){
                $clean = $str[$i].$clean;
            }
            
            // affichage

            echo $clean;
        ?>
    </body>
</html>