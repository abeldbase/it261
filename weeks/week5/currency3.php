<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Currency 3 sticky php form </title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background: #f0ddb5;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
        }

        fieldset {
            padding: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type=text],
        input[type=email],
        input[type=number] {
            width: 100%;
            height: 30px; /* Adjusted height */
            margin-bottom: 10px;
        }

        h1, h2, h3 {
            margin-bottom: 10px;
            font-family: 'Playfair serif';
        }

        input[type=submit] {
            margin-bottom: 10px;
        }

        select {
            display: block;
            margin-bottom: 10px;
        }

        form ul {
            margin-bottom: 10px;
            list-style-type: none;
        }

        .head {
            width: 400px;
            padding: 10px;
            margin: 0 auto; /* Center horizontally */
        }

        .box {
            width: 400px;
            padding: 10px;
            margin: 0 auto; /* Center horizontally */
        }

        .error {
            color: red;
            font-style: italic;
            font-size: .9em;
            margin-top: 15px;
            text-align: center;
        }

        .video-container {
            text-align: center;
            margin-top: 20px; /* Adjust as needed */
        }

        .video-container video {
            max-width: 600px;
            height: 400px;
        }
    </style>
</head>
<body>
    <!--https://www.geeksforgeeks.org/how-to-prevent-xss-with-html-php/ -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <label>NAME</label>
            <input type="text" name="name" value="<?php if(isset($_POST['name']))echo htmlspecialchars($_POST['name']); ?>">
            <label>EMAIL</label>
            <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
            <label>How much money do you have?</label>
            <input type="number" name="amount" value="<?php if(isset($_POST['amount'])) echo htmlspecialchars($_POST['amount']); ?>">
            <!-- time for our radio button that has an addtional attributes of VALUE  -->
            <label>Choose your currency </label>
            <ul>
                <li><input type="radio" name="currency" value="0.017" <?php if (isset($_POST['currency']) && $_POST['currency'] == 0.017) echo 'checked="checked"'; ?>> Rubles</li>
                <li><input type="radio" name="currency" value="0.76" <?php if (isset($_POST['currency']) && $_POST['currency'] == 0.76) echo 'checked="checked"'; ?>> Canadian Dollars</li>
                <li><input type="radio" name="currency" value="1.15" <?php if (isset($_POST['currency']) && $_POST['currency'] == 1.15) echo 'checked="checked"'; ?>> Pounds</li>
                <li><input type="radio" name="currency" value="1.00" <?php if (isset($_POST['currency']) && $_POST['currency'] == 1.00) echo 'checked="checked"'; ?>> Euros</li>
                <li><input type="radio" name="currency" value="0.0074" <?php if (isset($_POST['currency']) && $_POST['currency'] == 0.0074) echo 'checked="checked"'; ?>>Yen</li>
            </ul>
            <label>Choose your banking institution </label>
            <select name="bank">
                <option value="" <?php if(isset($_POST['bank']) && is_null($_POST['bank'])) echo 'selected ="unselected" ' ;?>> Select one!</option>
                <option value="boa" <?php if(isset($_POST['bank']) && $_POST['bank']=='boa') echo 'selected ="selected"' ;?>>Bank of America !</option>
                <option value="chase" <?php if(isset($_POST['bank']) && $_POST['bank']=='chase') echo 'selected ="selected"' ;?>>Chase Bank !</option>
                <option value="baner" <?php if(isset($_POST['bank']) && $_POST['bank']=='baner') echo 'selected ="selected"' ;?>>Baner Bank!</option>
                <option value="wells"<?php if(isset($_POST['bank']) && $_POST['bank']=='wells') echo 'selected ="selected"' ;?>>Wells Fargo!</option>
                <option value="becu"<?php if(isset($_POST['bank']) && $_POST['bank']=='becu') echo 'selected ="selected"' ;?>>Boeing Credit Union !</option>
            </select>
            <input type="submit" value="Conver it!">
            <p><a href="">RESET IT !</a></p>
        </fieldset>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['name'])){
            echo '<p class="error"> Please fill out your name!</p>';
        }
        if (empty($_POST['email'])){
            echo '<p class="error"> Please fill out your email!</p>';
        }
        if (empty($_POST['amount'])){
            echo '<p class="error"> Please fill out amount!</p>';
        }
        if (empty($_POST['currency'])){
            echo '<p class="error"> Please check  your currency!</p>';
        }
        if ($_POST['bank'] == NULL){
            echo '<p class="error"> please choose your banking institution </p>' ;
        }

        if(isset($_POST['name'], $_POST['email'], $_POST['amount'], $_POST['currency'], $_POST['bank'])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $amount=floatval($_POST['amount']);
            $currency=floatval($_POST['currency']);
            $bank=$_POST['bank'];
            $dollars = $amount * $currency;
            if (!empty($name && $email && $amount && $currency && $bank)) {
    echo '<div class="box"><h2>Hello ' . $name . ', </h2><p>You now have <b>$' .number_format($dollars, 2) . ' American dollars</b>, and we will be emailing you at<b> ' . $email . '</b> with your information as well as depositing <b>your fund at <b>'.$bank.' bank!</b></div>';

    // Check the amount and display the appropriate video
    echo '<div class="video-container">';
    echo '<video controls autoplay>';
    if ($amount > 100) {
        echo '<source src="happy.mp4" type="video/mp4">';
    } else {
        echo '<source src="sad.mp4" type="video/mp4">';
    }
    echo 'Your browser does not support the video tag.';
    echo '</video>';
    // echo '</div>';
}

            }
        }

    ?>

<!-- </body> -->
</html>
