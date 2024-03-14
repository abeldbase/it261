<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 9 user exercise</title>
    <link href="./css/styles.css" type="text/css" rel="stylesheet" />
</head>
    <header>
        <div class="inner-header">
            <a href="index.php"></a>
            <?php
            // Check if user is logged in
            if(isset($_SESSION['username'])){
                echo '<a href="logout.php" class="logout-button">Logout</a>';
            } else {
                echo '<a href="login.php">Login</a>';
            }
            ?>
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
        </div>
    </header>
    <iframe width="100%" height="60" src="https://rss.app/embed/v1/ticker/aim5wS9Di32xXUTw" frameborder="0"></iframe>


