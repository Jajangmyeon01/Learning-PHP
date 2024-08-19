<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Scopes</title>
    </head>
    <body>
        <?php 
        $hobby = "Programming";
          function myFunction ($hobby) {
            $localVar = "Hello, World";
           // return $GLOBALS["$hobby"];
          }
          echo myFunction($hobby);
       ?>
              
       <?php 
         echo "<br>";
        function myNum() {
           static $staticVar = 0;
            $staticVar++;
            return $staticVar;
        }
        echo myNum();
        echo myNum();
        echo myNum();
       ?>
    </body>
</html>