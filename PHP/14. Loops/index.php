<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Loops</title>
    </head>
    <body>
        <?php 
          for ($i = 0; $i <= 20; $i++ ) {
            echo "Output : " . "$i" . "<br>";
          }  
          echo "<br>";

          $test = 5;
          while ($test <= 10) {
            echo $test ."<br>";
            $test++;
          }
          echo "<br>";
          $num1 = 10;
          do {
            echo $num1;
            $num1++;
          }while ($num1 <= 20);
          echo "<br>";
          echo "<br>";
          $cars = array("Toyota", "Chevrolet", "Honda", "Ford");
          $cars = array("Toyota" => "Japan",  "Chevrolet" => "USA", "Honda" => "Mexico", "Lamborghini" => "Italy");
          foreach ($cars as $car) {
            echo "This is a " . $car ."<br>";
          }
          echo "<br>";
          $cars = array("Toyota" => "Japan",  "Chevrolet" => "USA", "Honda" => "Mexico", "Lamborghini" => "Italy");
          foreach ($cars as $car => $manufac) {
            echo "This is a " . $car . " they came from ". $manufac . "<br>";
          }

        ?>
    </body>
</html>