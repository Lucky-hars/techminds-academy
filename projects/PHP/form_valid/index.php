<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .login-form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .login-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border: none;
        }
        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>

    <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $url = $_POST['email'];

            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "The email address '$email' is valid!";
            }else  {
                echo "The email address '$email' is not valid";
            }
        }
    ?>

</head>
<body>

    <div class="login-form">
        <h2>Enter Your phone</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="url">Enter url</label>
                <input type="url" id="url" name="url" required>
            </div>

            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

</body>
</html>