<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Dayton Design Studio </title>
        <link type="text/css" rel="StyleSheet" href="/stylesheet/StyleSheet.css" media="screen">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="../control/controller.js"></script>
    </head>
    <body>
        <img src="/images/daytondesignstudiologo.png" class="sublogo" alt="Smiley face"/> 
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
        </header> 

        <div id="editdesign">
            <?php echo "<p>$message</p>"; ?>   
            <input type="hidden" name="actiontype" id="actiontype" value="" />
            <form id="editForn" method="post" action="/index.php">
                <fieldset>
                    <legend>Add Design</legend>
                    Design Name: <input type="text" name="design_name" id="firstname" required /><br />
                    Design Tag: <input type="text" name="design_tag" id="lastname"  required /><br />
                    Description: <textarea name="description" id="description" required ></textarea><br />
                    <input type="submit" name="submit" id="Add" value="Add">
                    <input type="hidden" name="action" value="adddesignsubmit" />

                </fieldset>
            </form>
        </div>

        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>
        </footer>
        <div id="copyright">&copy; Copyright 2014 • Dayton Design Studio</div>
    </body>
</html>


