<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dayton Design Studio</title>
        <link type="text/css" rel="StyleSheet" href="/stylesheet/StyleSheet.css" media="screen"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    </head>

    <body>
        <img src="/images/daytondesignstudiologo.png" class="sublogo" alt="Smiley face"/> 
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>  
        </header> 
        <h2> View Users </h2>
        <?php
        foreach ($users as $user) {
            echo "<p>{$user["first_name"]} {$user["last_name"]} "
            . "<a href = '/index.php?action=edituser&amp;id={$user["id"]}'>edit</a> "
            . "<a href = '/index.php?action=deleteuser&amp;id={$user["id"]}'>delete</a></p>";
        }
        ?>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>
        </footer>
        <div id="copyright">&copy; Copyright 2014 • Dayton Design Studio</div>
    </body>
</html>
