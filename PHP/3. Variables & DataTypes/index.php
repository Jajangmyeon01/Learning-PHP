<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Variables & DataTypes</title>
    </head>
    <body>
        <p> This is a <?php echo "amazing" ?> paragraph</p>    
        <?php $fullName = "Anna Kendrick ";
              $age = 39;
              $isBeautiful = true;
        
              // Calling variables //
              echo $fullName, $age;
              // Array // 
              $studentNames = array("Anna","Justin","Gen","<br> Philip","Levi",);
              echo $studentNames[3];
              $object = null;
        ?>
        <?php $introduceSelf = "Gen Exus Vergara";
        ?>
        <p>Hi! My name is <?php echo $introduceSelf; ?>, and I'm learning PHP!</p>
    </body>
</html>