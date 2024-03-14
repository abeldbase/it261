<?php
include('config.php');
// Establish database connection
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

// Initialize errors array
$errors = array();

// Handle user registration
if(isset($_POST['reg_user'])){
    // Extract form data and sanitize inputs
    $first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
    $email = mysqli_real_escape_string($iConn, $_POST['email']);
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password1 = mysqli_real_escape_string($iConn, $_POST['password1']);
    $password2 = mysqli_real_escape_string($iConn, $_POST['password2']);

    // Validate form inputs
    if (empty($first_name)) {
        array_push($errors, 'First name is required');
    }
    if (empty($last_name)) {
        array_push($errors, 'Last name is required');
    }
    if (empty($email)) {
        array_push($errors, 'Email is required');
    }
    if (empty($password1)) {
        array_push($errors, 'Password is required');
    }
    if ($password1 != $password2) {
        array_push($errors, 'Passwords do not match');
    }

    // Check if username or email already exists in database
    $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";
    $result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['username'] == $username) {
            array_push($errors, 'Username already exists');
        }
        if ($user['email'] == $email) {
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
        header('Location: login.php'); // Redirect to login page after successful registration
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Today</title>
      <style>
          body {
              margin: 0;
              padding: 0;
              font-family: Arial, sans-serif;
              background-color: #f4f4f4;
          }

          form {
              width: 80%;
              max-width: 600px;
              margin: 20px auto;
              padding: 20px;
              background-color: #fff;
              border-radius: 5px;
              box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
          }

          h2 {
              text-align: center;
              margin-bottom: 20px;
          }

          label {
              display: block;
              margin-bottom: 5px;
          }

          input[type="text"],
          input[type="email"],
          input[type="password"] {
              width: calc(100% - 10px);
              padding: 10px;
              margin-bottom: 15px;
              border: 1px solid #ccc;
              border-radius: 5px;
          }

          button {
              padding: 10px 20px;
              border: none;
              border-radius: 5px;
              background-color: #007bff;
              color: #fff;
              cursor: pointer;
          }

          button:hover {
              background-color: #0056b3;
          }

          footer {
              position: fixed;
              bottom: 0;
              left: 0;
              width: 100%;
              padding: 10px 0;
              background-color: #f8f9fa;
              text-align: center;
          }

          footer ul {
              list-style: none;
              margin: 0;
              padding: 0;
          }

          footer ul li {
              display: inline;
              margin: 0 10px;
          }

          footer ul li:first-child {
              border-right: 1px solid #ccc;
              padding-right: 10px;
              margin-right: 10px;
          }

          footer ul li a {
              color: #007bff;
              text-decoration: none;
          }

          footer ul li a:hover {
              text-decoration: underline;
          }
      </style>
  </head>
<body>
    <form method="post" action="register.php">
      <h2>Register Today</h2>
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" id="first_name" value="<?php echo isset($_POST['first_name']) ? htmlspecialchars($_POST['first_name']) : ''; ?>">

        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" id="last_name" value="<?php echo isset($_POST['last_name']) ? htmlspecialchars($_POST['last_name']) : ''; ?>">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">

        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>">

        <label for="password1">Password</label>
        <input type="password" name="password1" id="password1">

        <label for="password2">Confirm your Password</label>
        <input type="password" name="password2" id="password2">

        <button type="submit" name="reg_user" class="btn">Register!</button>
        <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'">Reset</button>
        <?php include('errors.php'); ?>
    </form>
  
  <!-- end wrapper  -->
  <?php include('./footer.php')?>
