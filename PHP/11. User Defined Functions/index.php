<?php
declare(strict_types= 1);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Difined Functions</title>
    </head>
    <body>
        <?php 
            function sayHello($name, $lastname) {
                return "Hello, ". "$name" . "$lastname";
            }
           echo sayHello("Anna ", "Kendrick");  
        ?>
        <?php    
        $hobby = "Programming";
            function Calculator($num1, $num2) {
                global $hobby;
                $result = $num1 + $num2;
                return $result;
              //  return $hobby;
            }
            echo "<br>";
            echo $test = calculator(5,5);
            echo "<br>";
            echo $hobby;
        ?>
    </body>
</html>