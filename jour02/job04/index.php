<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Job 04</title>
    </head>
    <body>
        <?php          
            for($i = 0; $i <= 100; $i++) {
                if($i % 3 == 0 && $i % 5 ==0){
                    echo "FizzBuzz".'<br>';
                }
                else if($i % 3 == 0){
                    echo "Fizz".'<br>';
                }
                else if($i % 5 == 0){
                    echo "Buzz".'<br>';
                }
                else{
                    echo $i.'<br>';
                }
            }
        ?>
    </body>
</html>