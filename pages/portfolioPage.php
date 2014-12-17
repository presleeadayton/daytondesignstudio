<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Dayton Design Studio </title>
        <link type="text/css" rel="StyleSheet" href="/stylesheet/StyleSheet.css" media="screen"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="../control/controller.js"></script>
    </head>

    <body onload="loadVotes()">
        <input type="hidden" id="imageName" value="<?php echo $design['design_name']; ?>">
        <img src="/images/daytondesignstudiologo.png" class="sublogo" alt="Smiley face"/> 
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>  
        </header> 
        <h2> <?php echo $design['design_name']; ?> </h2>

        <img src="<?php echo $design['image_url']; ?>" alt="<?php echo $design['design_name']; ?>">

        <p><span>  <?php echo $design['description']; ?> </span></p>

        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>
        </footer>
        <div id="copyright">&copy; Copyright 2014 • Dayton Design Studio</div>
    </body>
</html>