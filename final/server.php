<?php
// this is my server page that will be communicating to the data base
//our session  -- this is where we will start our session  - it is a way to store the information
//we would like the information that is inputted via our registration form to land in our database!!
session_start();
include('config.php');

$errors = array();
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

// Check if reg_user isset
if(isset($_POST['reg_user'])){
    // Extract form data and sanitize inputs
    $first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
    $email = mysqli_real_escape_string($iConn, $_POST['email']);
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password1 = mysqli_real_escape_string($iConn, $_POST['password1']);
    $password2 = mysqli_real_escape_string($iConn, $_POST['password2']);

    // Validate form inputs
    if (empty($first_name)){
        array_push($errors, 'First name is required');
    }
    if (empty($last_name)){
        array_push($errors, 'Last name is required');
    }
    if (empty($email)){
        array_push($errors, 'Email is required');
    }
    if (empty($password1)){
        array_push($errors, 'Password is required');
    }
    if ($password1 != $password2){
        array_push($errors, 'Passwords do not match');
    }

    // Check if username or email already exists in database
    $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";
    $result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));
    $user = mysqli_fetch_assoc($result);
    if ($user){
        if ($user['username'] == $username){
            array_push($errors, 'Username already exists');
        }
        if ($user['email'] == $email){
            array_push($errors, 'Email already exists');
        }
    }

    // If no errors, insert user data into database
    if (count($errors) == 0) {
        $password = md5($password1); // Encrypt password before storing in database
        $query = "INSERT INTO users (first_name, last_name, email, username, password)
                  VALUES ('$first_name', '$last_name', '$email', '$username', '$password')";
        mysqli_query($iConn, $query);
        $_SESSION["username"] = $username;
        $_SESSION["success"] = "You are now logged in";
        header('Location: index.php'); // Redirect to index.php after successful registration
        exit();
    }
}

// Check if login_user isset
if(isset($_POST['login_user'])){
    // Extract form data and sanitize inputs
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password = mysqli_real_escape_string($iConn, $_POST['password']);

    // Validate form inputs
    if (empty($username)){
        array_push($errors, 'Username is required');
    }
    if (empty($password)){
        array_push($errors, 'Password is required');
    }

    // If no errors, attempt login
    if (count($errors) == 0) {
        $password = md5($password); // Hash the password

        // Query to check if username and hashed password match
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

        // Execute the SQL query
        $result = mysqli_query($iConn, $query) or die(mysqli_error($iConn));

        // Check if a row is returned
        if (mysqli_num_rows($result) == 1) {
            // Set session variables
            $_SESSION["username"] = $username;
            $_SESSION["success"] = 'You are now logged in';

            // Redirect to index.php
            header('Location: index.php');
            // exit();
        } else {
            // If no row is returned, username/password combination is incorrect
            array_push($errors, 'Wrong username/password combination');
        }
    }
}
?>
