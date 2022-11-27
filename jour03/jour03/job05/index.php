<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Job 05</title>
    </head>
    <body>
        <?php          
            //$str = 'On n’est pas le meilleur quand on le croit mais quand on le sait';
            $str = 'On nest pas le meilleur quand on le croit mais quand on le sait';
            $voyelles = 'aeiouyAEIOUY';
            $count = 0;    
            $clean = '';
            $total = 0;
            $consonne = 0;
            $void = " ";
            for ($i = 0; $i < strlen($str); $i++){
                for ($a = 0; $a < strlen($voyelles); $a++){
                    if ($str[$i] == $voyelles[$a]){
                        $count++;
                    }
                }
            }
           
            for ($i = 0; $i < strlen($str); $i++){
                if ($str[$i] != $void){
                $clean = $str[$i].$clean;
                }
            }

            
            $total = strlen($clean);
            $consonne = $total-$count;
            /*echo $consonne; 
            echo $count;*/
            echo '<table>
            <tr>
                <th>Consonne</th>
                <th>Voyelle</th>
            </tr>
            <tr>
                <th>'.$consonne.'</th>
                <th>'.$count.'</th>
            </tr>
            
            </table>';
            /*echo '<br/>'.$total;
            echo "<br/>".$total; autre façon de fiare le echo */   
            /* essaie
            $array_special = ['.',';',':',',','!','#',"'",];
            $clean = '';
            $super_clean = '';
            essaie
            $void = " ";
            for ($i = 0; $i < strlen($str); $i++){
                if ($str[$i] != $void){
                $clean = $str[$i].$clean;
                }
            }
            //echo $clean;
            for($i = 0; $i < strlen($clean); $i++){
                $ok = true;
                for ($a = 0; $a < count($array_special); $a++){
                    if ($clean[$i] == $array_special[$a]){
                        $ok = false;
                    }
                }
                if ($ok){
                   $super_clean = $str[$a].$super_clean;
                }
                $ok = true;
            }    
            echo $super_clean;
            //$super_clean = $str[$a].$super_clean;*/


        ?>
    </body>
</html>