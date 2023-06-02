<!DOCTYPE html>
<html>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5gYigcGovFd2J9VNz2Dq0ugUy-SgAoXXQ5g&usqp=CAU");
            background-size: cover;
            background-repeat: no-repeat;
        }

        .container {
            width: 200px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 20px;
            margin-top: 150px;
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 3px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .error-message {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <?php if (isset($errorMessage)) { ?>
            <p class="error-message"><?php echo $errorMessage; ?></p>
        <?php } ?>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Login">
        </form>
    </div>
    
     <div class="container signin">
    <p>Don't have an account? <a href="REGISTERCODe.html">Register here!</a>.</p>
  </div>
    
</body>
</html>