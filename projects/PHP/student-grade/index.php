<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>students grades</title>
</head>
<body>
    <?php
    $student =[
"John" => "A",
"Jane" => "B",
"Sam"   => "C",
"Alice" => "A"
    ];
    echo "<table border='1'>
    <tr>
    <th>Name</th>
    <th>Grade</th>
    </tr>";

    foreach($student as $name => $grade){
        echo "
        <tr>
        <td>$name</td>
        <td>$grade</td>
        
        </tr>";
    }
    echo"</table>";
    
    ?>
    

    
</body>
</html>