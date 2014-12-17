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
        <h2> Admin </h2>
        <a href="/index.php?action=viewusers">View Users</a><br>
        <a href="/index.php?action=viewdesigns">View Designs</a><br>
        <a href="/index.php?action=adddesign">Add Design</a><br>

        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>
        </footer>
        <div id="copyright">&copy; Copyright 2014 • Dayton Design Studio</div>
    </body>
</html>



