<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Built In Variables</title>
    </head>
    <body>
        <?php 
            echo $_SERVER["DOCUMENT_ROOT"];
            echo "<br>";
            echo $_SERVER["PHP_SELF"];
            echo "<br>";
            echo $_SERVER["SERVER_NAME"];
            echo "<br>";
            echo $_SERVER["REQUEST_METHOD"];
        ?>
        <?php 
           echo "<br>";
           echo $_GET["name"];
           echo "\n";
           echo $_GET["age"];
           echo "<br>";

           $_SESSION["username"] = "Jajangmyeon";
           echo $_SESSION["username"];

           /*
           $_SERVER[""];
           $_GET[""];
           $_POST[""];
           $_REQUEST[""];
           $_FILES[""];
           $_COOKIE[""];
           $_SESSION[""];
           $_ENV[""];
           */
        ?>
    </body>
</html>