<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
        include '../connect.php';
    if($_SERVER["REQUEST_METHOD"] =="POST")  {   
        $username =$_POST["username"];
        $password =$_POST["password"];
     }
     //using prepared statement to prevent SQL injection
     $stmt = $conn->prepare("SELECT *FROM users WHERE username = ? AND password = ?");
     $stmt->bind_param("ss", $username, $password);
     $stmt->execute();

     $result = $stmt->get_result();
     if($result->num_rows > 0) {
        echo "Login succesful!🤗";

     }else{
        echo "Invalid username or password.";
        $stmt->close();

     }
    
    
    
    
    ?>
    <form action="" method="POST">
        <label for="">username</label><br>
        <input type="text" placeholder="username"><br>
        <label for="">password</label><br>
        <input type="text" placeholder="enter password"><br>
        <input type="sumbit" value="Login">
    
    </form>
    
</body>
</html>