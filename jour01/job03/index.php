<?php
$myBool = true;
$entier = 6;
$str = 'kikou';
$float = 0.2;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Job 03</title>
    </head>
    <header>
        <table>
            <tr>  
                <td>type</td>  
                <td>nom</td>  
                <td>valeur</td>  
            </tr>
            <tr> 
                <td>boléen</td>
                <td>boléen</td>
                <td> <?php echo $myBool ?></td>
            </tr>
            <tr> 
                <td>boléen</td>
                <td>entier</td>
                <td> <?php echo $entier ?></td>
            </tr>
            <tr> 
                <td>boléen</td>
                <td>chaine de caractère</td>
                <td> <?php echo $str ?></td>
            </tr>
            <tr> 
                <td>boléen</td>
                <td>nom à virgule flottante</td>
                <td> <?php echo $float ?></td>
            </tr>
        </table>
    </header>
    
</html>