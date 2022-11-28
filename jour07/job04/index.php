<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Job 04</title>
    </head>
    <body>
        <?php
            //déclaration de variable
            $a = 5;
            $operation = ('*'.'-'.'+'.'/'.'%');
            $b = 12; 
            
            //fonction
            function calcul($a, $operation, $b){
                return $a * $b;
            }
            
            //affichage du résultat
            echo calcul($a, $operation, $b)
            /* test
            $num = 4;
            function carre($num){
                return $num * $num;
            }
            echo carre($num); // Affiche '16'*/
        ?>
    </body>
</html>