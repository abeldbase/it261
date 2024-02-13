<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuel Efficiency Calculator</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet" /> 
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <label>Name</label>
            <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">
            <label>Total Miles Driving?</label>
            <input type="number" name="totalMiles" value="<?php if(isset($_POST['totalMiles'])) echo htmlspecialchars($_POST['totalMiles']); ?>">
            <label>How fast do you typically drive?</label>
            <input type="number" name="speed" value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']); ?>">
            <label>How many hours per day do you plan on driving?</label>
            <input type="number" name="hoursPerDay" value="<?php if(isset($_POST['hoursPerDay'])) echo htmlspecialchars($_POST['hoursPerDay']); ?>">
            <label>Price of gas</label>
            <ul>
                <li><input type="radio" name="price" value="3.00" <?php if(isset($_POST['price']) && $_POST['price'] == 3.00) echo 'checked="checked"'; ?>>$3.00</li>
                <li><input type="radio" name="price" value="3.50" <?php if(isset($_POST['price']) && $_POST['price'] == 3.50) echo 'checked="checked"'; ?>>$3.50</li>
                <li><input type="radio" name="price" value="4.00" <?php if(isset($_POST['price']) && $_POST['price'] == 4.00) echo 'checked="checked"'; ?>>$4.00</li>
            </ul>
            <label>Fuel Efficiency</label>
            <select name="fuelEfficiency">
            <option value="" <?php if(isset($_POST['fuelEfficiency'])&& is_null($_POST['fuelEfficiency'])) echo 'selected ="unselected" ' ;?>> Select one!</option>
                <option value="10" <?php if(isset($_POST['fuelEfficiency']) && $_POST['fuelEfficiency'] == 10) echo 'selected="selected"'; ?>>Terrible@10 mpg</option>
                <option value="20" <?php if(isset($_POST['fuelEfficiency']) && $_POST['fuelEfficiency'] == 20) echo 'selected="selected"'; ?>>Bad@20 mpg</option>
                <option value="30" <?php if(isset($_POST['fuelEfficiency']) && $_POST['fuelEfficiency'] == 30) echo 'selected="selected"'; ?>>Okay@30 mpg</option>
                <option value="40" <?php if(isset($_POST['fuelEfficiency']) && $_POST['fuelEfficiency'] == 40) echo 'selected="selected"'; ?>>Good@40 mpg</option>
                <option value="50" <?php if(isset($_POST['fuelEfficiency']) && $_POST['fuelEfficiency'] == 50) echo 'selected="selected"'; ?>>Great@50 mpg</option>
            </select>
            <input type="submit" value="Calculate">
            <p><a href="">RESET IT!</a></p>
        </fieldset>
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $totalMiles = isset($_POST['totalMiles']) ? floatval($_POST['totalMiles']) : 0;
    $speed = isset($_POST['speed']) ? floatval($_POST['speed']) : 0;
    $hoursPerDay = isset($_POST['hoursPerDay']) ? floatval($_POST['hoursPerDay']) : 0;
    $price = isset($_POST['price']) ? floatval($_POST['price']) : 0;
    // Check for and echo errors directly
    if (empty($_POST['name'])) {
        echo '<p class="error">Please fill out the Name field!</p>';
    }
    if (empty($_POST['totalMiles'])) {
        echo '<p class="error">Please fill out the Total Miles Driven field!</p>';
    }

    if (empty($_POST['speed'])) {
        echo '<p class="error">Please fill out the Speed field!</p>';
    }

    if (empty($_POST['hoursPerDay'])) {
        echo '<p class="error">Please fill out the Hours per Day field!</p>';
    }

    if (empty($_POST['price'])) {
        echo '<p class="error">Please select Gas Price!</p>';
    }
    if (empty($_POST['fuelEfficiency'])) {
        echo '<p class="error">Please select Fuel Efficiency!</p>';
    }
    if (!empty($_POST['name']) && !empty($_POST['totalMiles']) && !empty($_POST['speed']) && !empty($_POST['hoursPerDay']) && !empty($_POST['price']) && !empty($_POST['fuelEfficiency'])) {
        $name = $_POST['name'];
        $miles = $totalMiles; 
        $hoursDriven = $totalMiles / $speed;
        $cost = ($miles / $hoursDriven) * $price;
        $fuelEfficiency = $miles / $cost;
        $totalHours = $totalMiles / $speed; // Total Hours Driven = Total Distance Driven / Speed
        $days = $totalHours / $hoursPerDay;
        $gasUsage = $miles / $_POST['fuelEfficiency'];

        echo '<div class="box"><h2>Hello ' . $name . ', </h2><p>You will be traveling a total of <b>' . number_format($totalHours, 2) . ' hours </b>, taking <b>' . number_format($days, 2) . ' days </b>, and you will be using <b>' . number_format($gasUsage, 2). ' gallons of gas, costing you  <b>$' . number_format($gasUsage*$price, 2) . ' dollars!</b></p></div>';
    }
}
?>
</body>
</html>






