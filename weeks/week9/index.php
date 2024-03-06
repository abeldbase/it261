<?php
session_start();
include('config.php');

// Navigation links array
$nav = array(
    'index.php' => 'Home',
    'contact.php' => 'Contact'
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        p {
            margin-bottom: 20px;
            text-align: center;
        }

        a {
            color: #007bff;
            text-decoration: none;
            list-style-type: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .logout-button {
            position: absolute;
            top: 20px;
            right: 80px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        .logout-button:hover {
            background-color: #0056b3;
        }

        nav {
            text-align: left; /* Align navigation links to the right */
        }

        nav ul {
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline-block; /* Display navigation items horizontally */
            margin-left: 10px; /* Add space between navigation items */
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
    <nav>
        <ul>
            <?php
            // Display navigation links if user is logged in
            if(isset($_SESSION['username'])) {
                echo make_links($nav);
            }
            ?>
        </ul>
    </nav> 
    <h1>Welcome to our page</h1>
    <?php
    // Check if user is logged in
    if(isset($_SESSION['username'])){
        echo '<p>Hello, ' . $_SESSION['username'] . '! You are logged in.</p>';
        echo '<form action="logout.php" method="post">';
        echo '<button type="logout" name="logout_user" class="logout-button">Logout</button>';
        echo '</form>';
    } else {
        echo '<p>You are not logged in. Please <a href="login.php">log in</a> to access this page.</p>';
    }
    ?>
    <?php include('./includes/footer.php'); ?>
</body>
</html>



