<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature converter</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            width: 400px;
        }
        
    </style>

</head>
<body>
    <form action="" method="POST">

    <label for="">Temperature converter</label><br>
    Enter Temperature:<input type="number" name="temperature"><br>
    convert form:
        <select name="unit_form" id="">
            <option value="celsius">celsius</option>
            <option value="fahrenheit">fahrenheit</option>
        </select><br>
        convert to:
        <select name="unit_to" id="">
            <option value="celsius">celsius</option>
            <option value="fahrenheit">fahrenheit</option>
        </select><br>
        <input type="submit" value="convert">

    </form>
    <?php  
    function convertTemperature($temp,$form,$to){
        if($form == "celsius"&& $to == "fahrenheit"){
            return($temp *9/5)+32;
        }elseif($form == "fahrenheit" && $to == "celsius"){
            return($temp - 32) * 5/9;
        }
        return $temp; //no conversion needed if same unit
    }
    
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $temperature =$_POST['temperature'];
        $unit_form =$_POST['unit_form'];
        $unit_to = $_POST['unit_to'];
        $converted_temp = convertTemperature($temperature,$unit_form,$unit_to);
        echo "convert temperature: " . $converted_temp;

    }
    
    
    ?>

</body>
    
</html>