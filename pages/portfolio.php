<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Dayton Design Studio </title>
        <link type="text/css" rel="StyleSheet" href="/stylesheet/StyleSheet.css" media="screen">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    </head>
    <body>
        <img src="/images/daytondesignstudiologo.png" class="sublogo" alt="Smiley face"/>
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
        </header>

        <h2> Portfolio </h2>
        <?php
        foreach ($portfolio as $design) {
            ?>

            <h4><a href="/index.php?action=portfolioPage&amp;id=<?php echo $design['id']; ?>"><?php echo $design['design_name']; ?></a></h4>
            <img src="<?php echo $design['image_url']; ?>" alt="<?php echo $design['design_name']; ?>">
    <?php
}
?>
        <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>
        </footer>
        <div id="copyright">&copy; Copyright 2014 • Dayton Design Studio</div>
    </body>
</html>