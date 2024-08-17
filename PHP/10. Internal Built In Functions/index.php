<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Internal Built In Functions</title>
    </head>
    <body>
        <?php 
            $string = "Hello World";

            echo strlen($string);
        
            echo "<br>";
            echo strpos($string, "Wo");
        
            echo "<br>";
            echo str_replace("World", "Anna", $string);
        
            echo "<br>";
            echo strtolower($string);
        
            echo "<br>";
            echo strtoupper($string);
        
            echo "<br>";
            echo substr($string, 1, -4);
        
            echo "<br>";
            print_r(explode(" ", $string));
           
            echo "<br>";
            $number = -5.5;
           
            echo abs($number);
            echo "<br>";
           
            echo round($number);
            echo "<br>";
           
            echo round($number);
            echo "<br>";

            echo pow(2, 3);
            echo "<br>";

            echo sqrt(16);
            echo "<br>";

            echo rand(1, 100);
            echo "<br>";

            $cars = ["Honda", "Chevrolet", "Ford", "Mazda"];
            $cars2 = ["Lamborghini", "Mustang", "Ferrari"];
            echo is_array($cars);
            
            echo "<br>";
            array_push($cars, "Tesla");
            print_r($cars);
            
            echo "<br>";
            array_pop($cars);
            print_r($cars);

            echo "<br>";
            print_r(array_reverse($cars));

            echo "<br>";
            print_r(array_merge($cars, $cars2));

            echo "<br>";
            echo date("Y-m-d H:i:s");

        ?>
        
    </body>
</html>