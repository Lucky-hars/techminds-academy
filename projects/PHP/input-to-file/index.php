<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <div class="container">

    <form action="" method="POST">
        Enter some:<br>
        <textarea name="content"></textarea><br>
        <input type="filename" placeholder="e.g, note,txt" value="note"><br>
        <input type="submit">
    </form>
    </div>
<?php 

if($_SERVER["REQUEST_METHOD"]== "POST"){
$content =$_POST["content"];
//write a file
file_put_contents("user_input.txt",$content);
//Read from the file and display contents
echo"<h3>contents of the file</h3>";
echo nl2br(file_get_contents("user_input.txt"));


    
        }







?>
    
</body>
</html>