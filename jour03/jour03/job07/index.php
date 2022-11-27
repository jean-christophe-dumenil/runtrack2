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
            $str = "Certaines choses changent, et d autres ne changeront jamais.";
            $clean = '';
            $alpha = strlen($str);
            $final = '';
            $letter = '';
            $Letter = '';
            $dictionnaire = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $dictionnaireM = "abcdefghijklmnopqrstuvwxyz";

            //algorithme
            for ($i = 1; $i < $alpha; $i++){
                $clean = $str[$alpha - $i].$clean;
                //echo '<br />';
                //echo $alpha - $i;
            }
            

            $final = $clean.$str[0];
            $letter = $final[0];
            for ($i=0; $i < strlen($dictionnaireM) ; $i++) { 
                # code...
                if ($letter == $dictionnaireM[$i]){
                   $Letter = $dictionnaire[$i] ;
                }
            }

            // Idée à la con nettoyage 1er lettre
            $kkk = '';
            for ($i=1; $i < strlen($final) ; $i++) { 
                $kkk = $kkk.$final[$i];
            }
            $kkk = $Letter.$kkk;

            // Idée à la con nettoyage final lettre

            $adress = $kkk[strlen($kkk)-1];
           
            for ($i=0; $i < strlen($dictionnaireM) ; $i++) { 
                # code...
                if ($adress == $dictionnaire[$i]){
                   $adress = $dictionnaireM[$i] ;
                }
            }
            echo '<br />';
            // affichage
            echo $kkk;
        ?>
    </body>
</html>