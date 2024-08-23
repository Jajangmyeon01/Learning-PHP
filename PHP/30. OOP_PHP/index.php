<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <form action = "includes/signup.inc.php" method="post";>
            <input type="text" name="username">
            <input type="password" name="pwd">
            <button>Signup</button>
        </form>
        <?php 
            require_once 'Classes/Car.php';

            $car1 = new Car("Honda", "White");
           // echo $car1->setBrand("Ford");
           // echo $car1->getBrand();

           $car1->setColor("Green");
           echo $car1->getColor();

            
 
        



            /*
            $brand = "Honda";
            $color = "White";

            function getCarInfo($brand, $color) {
                return "Brand: ". $brand . ", Color: " . $color;

            }
            echo getCarInfo($brand, $color);
            */
            ?>
    </body>
</html>