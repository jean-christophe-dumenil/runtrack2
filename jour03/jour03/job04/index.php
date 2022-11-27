<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Job 04</title>
    </head>
    <body>
        <?php          
            // déclaration de variable //
            $clean = '';
            $void = " ";
            $str = 'Dans l espace, personne ne vous entend crier';
            for ($i = 0; $i < strlen($str); $i++){
                if ($str[$i] != $void){
                    //print_r($clean = $str[$i] + $clean);
                    //print_r($str[$i]);
                $clean = $str[$i].$clean;
                }
            }
            echo strlen($clean);
                
        ?>
    </body>
</html>