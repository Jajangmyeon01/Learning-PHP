<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index & Arrays</title>
    </head>
    <body>
        <?php 
            $fruits = ["Apple", "Banana", "Lemon", "Mango"];
            $moreFruits = ["Watermelon","Strawberry"];
            //unset($fruits[2]);
            array_splice($fruits,1,0);
            echo $fruits[2]; 
            echo "<br>";
            array_push($fruits, "Cherry");
            print_r($fruits);
            
            echo "<br>";
            array_splice($fruits, 2, 0, $moreFruits);
            print_r($fruits);

            echo "<br>";
            $names = ["laundry" => "Anna", "trash" => "Philip", "vacuum" =>"Bella", "dishes" => "Gen"];
            echo $names["vacuum"];

            echo "<br>";
            print_r($names);

            echo "<br>";
            echo "counts inside of array: " . count ($names);

            echo "<br>";
            sort($names);
            print_r($names);

            echo "<br>";
            $someOfFood = ["deserts" => array("Cheese","Milk","Yogurt"), 
                           "meat" => array("chicken", "fish", "beef"),
                           "vegetables" => array("Brocoli", "Tomato", "Potato")];
            echo $someOfFood["meat"][2];
 
       
        ?>
    </body>
</html>