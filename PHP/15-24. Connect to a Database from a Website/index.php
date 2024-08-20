<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect to a Database from a Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        
        .bg {
            /* The image used */
            background-image: url('https://static.vecteezy.com/system/resources/previews/006/852/804/original/abstract-blue-background-simple-design-for-your-website-free-vector.jpg');
            
            /* Full height */
            height: 100%; 
            
            /* Center and scale the image */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .centered-content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.9); /* Slight transparency */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="bg">
        <div class="centered-content">
            <div class="container">
                <!-- Change Account Form -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h3 class="mb-0">Change Account</h3>
                    </div>
                    <div class="card-body">
                        <form action="./includes/formhandler.inc.php" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                            </div>
                            <button type="submit" class="btn btn-primary">Sign Up</button>
                        </form>
                    </div>
                </div>

                <!-- Delete Account Form -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Delete Account</h3>
                    </div>
                    <div class="card-body">
                        <form action="./includes/userdelete.inc.php" method="post">
                            <div class="mb-3">
                                <label for="del-username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="del-username" name="username" placeholder="Enter your username">
                            </div>
                            <div class="mb-3">
                                <label for="del-password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="del-password" name="pwd" placeholder="Enter your password">
                            </div>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
