<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Job 05</title>
    </head>
    <body>
    <?php
        set_time_limit(0);

        $nombre=100; //Variable permettant d'afficher la liste des nombres premiers inférieurs à $nombre

        echo "2<br>";
        for($i=2;$i<$nombre;$i++)
        {
	        for($j=2;$j<$i;$j++)
	    {     
		    if(($i%$j)==0) break;
		    if($j==($i-1)) echo "$i<br>"; 
	    }
    }
    ?>
    </body>
</html>