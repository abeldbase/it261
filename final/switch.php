<?php
session_start();
include('config.php');
include('header.php');
?>

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

    .news-feed {
        margin: 20px auto;
        width: 900px;
        height: 1600px;
    }
</style>

<h1>Switch Page</h1>

<div class="news-feed">
    <!-- News feed iframe -->
    <iframe width="900" height="1600" src="https://rss.app/embed/v1/magazine/aim5wS9Di32xXUTw" frameborder="0"></iframe>
</div>

<?php include('footer.php'); ?>
