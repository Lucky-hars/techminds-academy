<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <?php
    include 'connect.php';
 
  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST['name'];
      $email = $_POST['email'];
      if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    }
  
      $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

      if ($conn->query($sql) === TRUE) {
        echo "New user added successfully!";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
  ?>
</head>
<body>
  <div class="form-container">
    <h2>Sign Up</h2>
    <form action="" method="POST">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="form-button">
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>
</body>
</html>