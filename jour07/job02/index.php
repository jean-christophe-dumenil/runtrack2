<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Job 02</title>
    </head>
    <body>
        <?php
                       // Since $a is a boolean, it will return true
            function bonjour($jour){
                if ($jour == true) {
                    echo "true";
                }
    
                // Since $b is not a boolean, it will return false
                if ($jour == false) {
                    echo "false";
                }
            }
            bonjour($jour)
            
        ?>
    </body>
</html>