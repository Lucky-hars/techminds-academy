<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
    $_servername = "localhost";
    $username ="root";
    $password ="";
    $dbname = "php_users";
     
    //create connection 
    $conn = new mysqli($_servername,$username,$password, $dbname);
    
    //check connection 
    if($conn->connect_error)
    {

        die("connection failed: ". $conn->connect_error);
    }else{
        echo"Database connected successfully👏👏👏🤡";
    }
    
    
    
    
    
    ?>
    
</body>
</html>