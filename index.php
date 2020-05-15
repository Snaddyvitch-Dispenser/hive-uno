<?php
session_start();

$config = require("config.php");

?>
<!DOCTYPE HTML>
<html>
<head>
    <title><?php print(implode("",$config->branding)  . $config->separator . $config->tag_line)?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <?php require "navbar.php"; ?>

    <main>
        <div class="container text-dark bg-light p-5 rounded mt-sm-5">
            <h1>Welcome to <?php echo $config->branding[0] . $config->branding[2] ?></h1>
            <h5><?php echo $config->long_tag_line ?></h5>

            <h3 class="pt-3">How Can we Help You?</h3>
            <h4 class="pt-1">I want to join Hive</h4>
            <p>See current free account creation offers on the <a href="#">Available invites page</a>!</p>
            <h4>I want to invite someone to Hive</h4>
            <p>Please <a href="#">Log In</a> to your dashboard to create invite links you can send to friends!</p>
            <h4>I want to offer account creation to new users</h4>
            <p>Please <a href="#">Log In</a> to your dashboard to offer free account creation to new users!</p>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>