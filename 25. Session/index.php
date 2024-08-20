<?php 
    session_start();

    echo $_SESSION["username"] = "Jajangmyeon";
   
    unset($_SESSION["username"]);
    session_unset();
    
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Session</title>
    </head>
    <body>
        <?php 
            echo $_SESSION["username"];
        ?>
    </body>
</html>