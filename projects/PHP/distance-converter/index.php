<!DOCTYPE html>
<html>
<head>
	<title>Distance Converter</title>
</head>
<style>
    form{
        display: flex;
        flex-direction: column;
        width:300px ;
        margin: auto;
        padding: auto;

    }
    h1{
        text-align: center;
    }






</style>
<body>
	<h1>Distance Converter</h1>
	<form method="post">
		<label for="distance">Enter Distance:</label>
		<input type="number" id="distance" name="distance" required>
		<label for="from_unit">From:</label>
		<select id="from_unit" name="from_unit" required>
			<option value="ft">Feet (Ft)</option>
			<option value="m">Meters (M)</option>
			<option value="km">Kilometers (KM)</option>
		</select>
		<label for="to_unit">To:</label>
		<select id="to_unit" name="to_unit" required>
			<option value="ft">Feet (Ft)</option>
			<option value="m">Meters (M)</option>
			<option value="km">Kilometers (KM)</option>
		</select>
		<input type="submit" value="Convert">
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$distance = $_POST["distance"];
		$from_unit = $_POST["from_unit"];
		$to_unit = $_POST["to_unit"];

		// Conversion factors
		$ft_to_m = 0.3048;
		$ft_to_km = 0.0003048;
		$m_to_ft = 3.28084;
		$m_to_km = 0.001;
		$km_to_ft = 3280.84;
		$km_to_m = 1000;

		// Convert distance
		switch ($from_unit) {
			case "ft":
				if ($to_unit == "m") {
					$converted_distance = $distance * $ft_to_m;
				} elseif ($to_unit == "km") {
					$converted_distance = $distance * $ft_to_km;
				}
				break;
			case "m":
				if ($to_unit == "ft") {
					$converted_distance = $distance * $m_to_ft;
				} elseif ($to_unit == "km") {
					$converted_distance = $distance * $m_to_km;
				}
				break;
			case "km":
				if ($to_unit == "ft") {
					$converted_distance = $distance * $km_to_ft;
				} elseif ($to_unit == "m") {
					$converted_distance = $distance * $km_to_m;
				}
				break;
		}

		// Display converted distance
		echo "<h2>Converted Distance:</h2>";
		echo "$distance $from_unit is equal to $converted_distance $to_unit";
	}
	?>
</body>
</html>