<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("../connect.php");
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
 
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
    echo "Name:". $row["Name"] ."-Email:". $row["email"] . "<br>";
}
  }else{
    echo"0 results";
  }
  $conn->close();
    ?>

    <form action="" method="POST">
        <label for="">Enter</label>
        <input type="text" name="name" required>
        <label for="">Email name</label>
        <input type="email" name="email" required>
        <input type="submit" value="Add user">
    </form>
    
</body>
</html>