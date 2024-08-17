<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create a Calculator</title>
         <link rel="stylesheet" href="./style.css">
    </head>
    <body>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <h1>Calculator</h1>
                    <label for="firstnumber">Enter First Number</label>
                    <input type="number" name="num01" placeholder="First Number">
                        <select name="operator">
                            <option value="Add">+</option>
                            <option value="Subtract">-</option>
                            <option value="Multiply">*</option>
                            <option value="Divide">/<option>
                        </select>
                    <label for="secondnumber">Enter Second Number</label>
                    <input type="number" name="num02" placeholder="Second Number">
                    <button>Calculate</button>
            </form>

        <?php 
                // Grab data from inputs //
           if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
                $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
                $operator = htmlspecialchars($_POST["operator"]);

                // Error Handlers //
                $errors = false;

                if (empty($num01) || empty($num02) || empty($operator)) {
                    echo "<p class='cal-error'>Fll in all fields!</p>";
                    $errors = true;
                }
                if (!is_numeric($num01) || !is_numeric($num02)) {
                    echo "<p class='cal-error'>Only write numbers!</p>";
                    $errors = true;
                }

                // Calculate numbers if no errors //

                if (!$errors) {
                    $value = 0;
                    switch ($operator) {
                        case "Add": 
                            $value = $num01 + $num02;
                            break;
                        case "Subtract": 
                            $value = $num01 - $num02;
                            break;
                        case "Multiply": 
                            $value = $num01 * $num02;
                            break;
                        case "Divide": 
                            $value = $num01 / $num02;
                            break;
                        default:
                        echo "<p class='calc-error'>Something went wrong!</p>";
                            
                        
                    }
                    echo "<p class='calc-result'>Result = ". $value . "</p>";
                }

           } 
        ?>

    </body>
</html>