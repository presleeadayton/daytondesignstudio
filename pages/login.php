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

        <div id="loginregister">
            <?php echo "<p>$message</p>"; ?>   
            <input type="hidden" name="actiontype" id="actiontype" value="" />
            <form id="registerForm" method="post" action="/index.php">
                <fieldset>
                    <legend>Register a new account</legend>
                    First Name: <input type="text" name="firstname" id="firstname" required /><br />
                    Last Name: <input type="text" name="lastname" id="lastname" required /><br />
                    Email: <input type="email" name="emailregister" id="emailregister" required /><br />
                    Password: <input type="password" name="passwordregister1" id="passwordregister1" required /><br />
                    Please enter password again: <input type="password" name="passwordregister2" id="passwordregister2" required /><br />
                    <input type="submit" name="action" id="Register" value="Register">
                </fieldset>
            </form>

            <br /><br />
            <form id="loginForm" method="post" action="/index.php">   
                <fieldset>
                    <legend>Login with existing account</legend>
                    Email: <input type="text" name="emaillogin" id="emaillogin" /><br />
                    Password: <input type="password" name="passwordlogin" id="passwordlogin" /><br />
                    <input type="submit" name="action" id="Login" value="Login">
                </fieldset>
            </form>     
        </div><br>

        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>
        </footer>
        <div id="copyright">&copy; Copyright 2014 • Dayton Design Studio</div>
    </body>
</html>
