<?php include('server.php'); 
include('header.php');
?>
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

<main>   
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <h2>Login</h2>
    <label for="username">Username</label>
    <input type="text" name="username" id="username" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <button type="submit" name="login_user" class="btn">Login</button>
    <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'">Reset</button>
    <p>Haven't registered? <a href="register.php">Register here</a></p>
    <?php include('errors.php'); ?>
</form> 
</main>
<?php include('footer.php'); ?>
