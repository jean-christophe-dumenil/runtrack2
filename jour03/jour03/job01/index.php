<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Job 01</title>
    </head>
    <body>
        <?php          
            $nombre = [200, 204, 173, 98, 171, 404, 459];
            for ($i = 0; isset($nombre[$i]); $i++){
                if ($nombre[$i] % 2 == 0){
                    echo $nombre[$i].' est pair <br>';
                }
                else{
                    echo $nombre[$i].' est impair<br>';
                }
            }
        ?>
    </body>
</html>