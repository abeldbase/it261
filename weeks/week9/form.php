<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<?php
ob_start();
$first_name = '';
$last_name = '';
$email = '';
$username = '';
$password1 = '';
$password2 = '';
$first_name_err = '';
$last_name_err = '';
$email_err = '';
$username_err = '';
$password1_err = '';
$password2_err = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate first name
    if (empty($_POST['first_name'])) {
        $first_name_err = 'Please fill in your first name';
    } else {
        $first_name = $_POST['first_name'];
    }

    // Validate last name
    if (empty($_POST['last_name'])) {
        $last_name_err = 'Please fill in your last name';
    } else {
        $last_name = $_POST['last_name'];
    }

    // Validate email
    if (empty($_POST['email'])) {
        $email_err = 'Please fill in your email';
    } else {
        $email = $_POST['email'];
    }

    // Validate username
    if (empty($_POST['username'])) {
        $username_err = 'Please fill in your username';
    } else {
        $username = $_POST['username'];
    }

    // Validate password
    if (empty($_POST['password1'])) {
        $password1_err = 'Please fill in your password';
    } elseif (strlen($_POST['password1']) < 6) {
        $password1_err = 'Password must be at least 6 characters long';
    } else {
        $password1 = $_POST['password1'];
    }

    // Confirm password
    if (empty($_POST['password2'])) {
        $password2_err = 'Please confirm your password';
    } elseif ($_POST['password1'] !== $_POST['password2']) {
        $password2_err = 'Passwords do not match';
    } else {
        $password2 = $_POST['password2'];
    }

    // Process registration if there are no errors
    if (empty($first_name_err) && empty($last_name_err) && empty($email_err) && empty($username_err) && empty($password1_err) && empty($password2_err)) {
        // Insert the user's information into the database
        if ((int)$errors == 0) {
            $password = md5($password1); // Hash the password
            // Logically we have to insert the information into our database
            $query = "INSERT INTO users (first_name, last_name, email, username, password) VALUES ('$first_name', '$last_name', '$email', '$username', '$password')";
            mysqli_query($iConn, $query);
            $_SESSION["username"] = $username;
            $_SESSION["success"] = "You are now logged in";
            header('Location: login.php');
            exit;
        }
    }
}
?>

<style>

        /* Styles for my week6 form1.php */
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
    background: beige;
}

h1 {
    text-align: center;
    margin: 20px;
}

form {
    width: 500px;
    margin: 30px auto;
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
input[type=tel]{
    width: 100%;
    margin-bottom: 10px;
   
}
textarea{
    width: 100%;
    resize: none;
    height: 80px;
    margin-bottom: 10px;
}
select {
    width:auto;
    margin-bottom: 10px;
}

ul {
    list-style-type: none;
    margin-bottom: 10px;
    margin-left: 5px;
}

li {
    margin-bottom: 5px;
}

input[type=checkbox],
input[type=radio] {
    margin-right: 5px;
}

input[type=submit],
input[type=reset] {
    margin-top: 10px;
}

.error-message {
    color: red;
}

</style> 

<h1>Contact form  </h1>

    <fieldset>
        <legend>register</legend>
        <label>First Name</label>
        <input type="text" name="first_name" value="<?php if (isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">
        <span class="error-message"><?php echo $first_name_err; ?></span>

        <label>Last Name</label>
        <input type="text" name="last_name" value="<?php if (isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">
        <span class="error-message"><?php echo $last_name_err; ?></span>

        <label>Email</label>
        <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
        <span class="error-message"><?php echo $email_err; ?></span>

        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="<?php if (isset($_POST['username'])) echo htmlspecialchars($_POST['username']); ?>">
        <span class="error-message"><?php echo $username_err; ?></span>

        <label for="password1">Password</label>
        <input type="password" name="password1" id="password1" value="<?php if (isset($_POST['password1'])) echo htmlspecialchars($_POST['password1']); ?>">
        <span class="error-message"><?php echo $password1_err; ?></span>

        <label for="password2">Confirm your Password</label>
        <input type="password" name="password2" id="password2" value="<?php if (isset($_POST['password2'])) echo htmlspecialchars($_POST['password2']); ?>">
        <span class="error-message"><?php echo $password2_err; ?></span>

        <button type="submit" name="reg_user" class="btn">Register!</button>
        <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'">Reset</button>
       
    </fieldset>
</form>