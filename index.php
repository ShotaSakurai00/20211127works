<!DOCTYPE html>
<html>
    <head>
        <title>Example</title>
    </head>
    <body>

        <?php
         for ($i = 5; $i <= 100; $i++) {
            if ($i%7==0 and $i%5==0){
                echo '<p>';
                echo 'FizzBuzz';
                echo '</p>';
            }elseif ($i%7==0){
                echo '<p>';
                echo 'Fizz';
                echo '</p>';
            }elseif ($i%5==0){
                echo '<p>';
                echo 'Buzz';
                echo '</p>';
            }else{
                echo '<p>';
                echo $i;
                echo '</p>';
            }
        }
        ?>

     </body>
</html>