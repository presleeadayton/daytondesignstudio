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
        <h2> Contact Us </h2>

        <p><span> For any inquires, questions or concerns, please fill out the form below 
                and we will get back to you right away. </span></p><br>

        <?php
        if (!empty($reply)) {

            echo "<p class='notify'>$reply</p>";
        }

        unset($reply);
        ?> 
        <p>All fields are required.</p>    
        <form method="post" action="/index.php" id="contactform">
            <fieldset>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" size="10" value="<?php echo $name; ?>" required><br>
                <label for="email">Email Address:</label>
                <input type="email" name="email" id="email" size="30" value="<?php echo $email; ?>" required><br>
                <label for="subject">Subject:</label>
                <input type="text" name="subject" id="subject" size="60" value="<?php echo $subject; ?>" required><br>
                <label for="message">Message:</label>
                <textarea name="message" id="message" rows="10" cols="60" required><?php echo $message; ?></textarea><br>
                <p>Answer the following CAPTCHA question in the box below.</p>
                <label for="captcha">What is 4 + 4?</label>
                <input type="text" name="captcha" id="captcha" size="5" required><br>
                <label for="action">&nbsp;</label>
                <input type="submit" name="action" id="action" value="Send">
            </fieldset>
        </form> 
        <br>
        <br>
        <footer>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>
        </footer>
        <div id="copyright">&copy; Copyright 2014 • Dayton Design Studio</div>
    </body>
</html>
