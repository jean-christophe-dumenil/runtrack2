<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Job 03</title>
    </head>
    <body>
        <?php          
            $str = 'I m sorry Dave I m afraid I can t do that.';
            $tab = array ('b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z');
            $tot = 0;
            foreach($tab as $consone){
                $tot += substr_count(strtolower($str), $consone);
            }
            echo $tot
        ?>
    </body>
</html>