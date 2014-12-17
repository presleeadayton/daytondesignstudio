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

        <div id="edituser">
            <?php echo "<p>$message</p>"; ?>   
            <input type="hidden" name="actiontype" id="actiontype" value="" />
            <form id="editForm" method="post" action="/index.php">
                <fieldset>
                    <legend>Edit Account</legend>
                    First Name: <input type="text" name="firstname" id="firstname" value='<?php echo $user['first_name'] ?>' required /><br />
                    Last Name: <input type="text" name="lastname" id="lastname" value='<?php echo $user['last_name'] ?>' required /><br />
                    Email: <input type="email" name="email" id="email" value='<?php echo $user['email'] ?>' required /><br />
                    Password: <input type="password" name="password" id="password" required /><br />
                    <input type="submit" name="action" id="Edit" value="Edit">
                    <input type="hidden" name="id" id="actiontype" value="<?php echo $user['id'] ?>" />
                </fieldset>
            </form>
        </div>

        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>
        </footer>
        <div id="copyright">&copy; Copyright 2014 • Dayton Design Studio</div>
    </body>
</html>
