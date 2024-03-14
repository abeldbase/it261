<?php
session_start();
include('config.php');
include('header.php');
include('form.php'); 

?>

<style>
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
<?php include('footer.php'); ?>
