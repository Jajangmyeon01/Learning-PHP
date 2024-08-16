<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Operators</title>
    </head>
    <body>
        <?php
            // String Operator //
            $a = "Hello";
            $b = "World!";
            $c = $a . " " . $b;
            echo $c;
            echo "<br>";
            // Arithmetic Operator // 
            echo (7 * 7) + 1;
            // Assigning value //
            echo "<br>";
            $num1 = 2;
            $num2 = 3;
            $sum = ($num1 + $num2);
            echo $sum;
            // Comparison Operator //
            echo "<br>";
            $value1 = 3;
            $value2 = 2;
            if ($value1 > $value2) {
                echo "This statement is true";
            }else
                echo "This staments is false";
            // Logical Operator //
            echo "<br>";
            $pig = 4; 
            $dog = 4;

            $big = 5;
            $small = 3;
            if ($pig == $dog && $big == $small) {
                echo "It's equal";
                if ($pig !=  $dog){
                    echo "<br>";
                    echo "Something missing";
                } 
            }else{
                echo "It's not equal";
            }
            // Incrementing/Decrementing Operator //
            echo "<br>";
            $studentNumber = 99;
            echo "Increment: " . " " .  ++$studentNumber;
            echo "<br>";
            $studentNumber = 99;
            echo "Decrement: " . " " .  --$studentNumber;
        ?>

    </body>
</html>