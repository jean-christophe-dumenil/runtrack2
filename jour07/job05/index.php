<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Job 05</title>
    </head>
    <body>
        <?php
            
            //déclaration de variable
            
            $str = "salameche";
            $char = "l";

            //fonction

            function occurences($str, $char){
                return $str & $char;
            }
            echo substr_count($str, $char)

           /*$str = "Welcom to WayToLearnX, WayToLearnX is the best website for learning";
   
            echo substr_count($str, 'WayToLearnX');*/


        ?>
    </body>
</html>