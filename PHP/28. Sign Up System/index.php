<?php 
    require_once('./includes/config_session.inc.php');
    require_once('./includes/signup_view.inc.php');
?>

<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up System</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Login</h3>
                        <form action="./includes/login.inc.php" method="post">
                            <div class="form-group">
                                <label for="usernameLogin">Username</label>
                                <input type="text" class="form-control" id="usernameLogin" name="username" placeholder="Enter username">
                            </div>
                            <div class="form-group">
                                <label for="passwordLogin">Password</label>
                                <input type="password" class="form-control" id="passwordLogin" name="pwd" placeholder="Enter password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-body">
                        <h3 class="card-title text-center">Sign Up</h3>
                        <form action="./includes/signup.inc.php" method="post"> 
                            <?php 
                             signup_inputs();
                             echo '<br>';
                            ?>
                        </form>
                         <button type="submit" class="btn btn-success btn-block">Sign Up</button>
                        <?php 
                            check_signup_errors();
                        ?>              
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
