<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Conditions & Control Structures</title>
    </head>
    <body>
        <?php 

            // If Else/ Else If Statements // 
            $bool = true;
            $a = 1;
            $b = 2;
            if ($a < $b && !$bool) {
                echo "The First condition is true";
            } else if ($a < $b && $bool) {
                echo "The Second condition is true";
            } else if ($a < $b && $bool) {
                echo "The Third condition is true";
            } else {
                echo "None of these conditions were true";
            }

            // Switch Statements //
            echo "<br>";
            switch ($a) {
                case 1:
                    echo "The first case is correct";
                    break;
                case 2:
                    echo "The second case is correct";
                    break;
                default; 
                    echo "None of these case were correct";
            }
            echo "<br>";
            $result = match ($a) {
                1 => "Variable a is equal to one!",
                2 => "Variable a is equal to two!",
                default => "None were a match",
            };
            echo $result;
        ?>
    </body>
</html>