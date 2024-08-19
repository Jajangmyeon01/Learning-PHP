<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Constant</title>
    </head>
    <body>
        <?php 
            define("PI", 3.14);
            define("NAME", "Anna");
            echo PI;
            echo "<br>";
            echo NAME;

            function hobby() {
                echo PI;
            }
            echo "<br>";
            hobby()
        ?>
    </body>
</html>