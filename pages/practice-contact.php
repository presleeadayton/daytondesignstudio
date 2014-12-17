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
        <p> Dayton Design Studio creates simple, modern and unique designs just for you.</p>
        <p> At the moment the site is under construction but will resume very soon!</p>

        <br>    
        <p> For any inquires, questions or concerns, please fill out the form below 
            and we will get back to you right away. </p><br>

        <?php
        if (!empty($reply)) {

            echo "<p class='notify'>$reply</p>";
        }

        unset($reply);
        ?> 
        <p>All fields are required.</p>    
        <form method="post" action="index.php" id="contactform">
            <fieldset>
                <label for="firstname">First Name:</label>
                <input type="text" name="firstname" id="firstname" size="10" value="<?php echo $firstname; ?>" required><br>
                <label for="lastname">Last Name:</label>
                <input type="text" name="lastname" id="lastname" size="15" value="<?php echo $lastname; ?>" required><br>
                <label for="email">Email Address:</label>
                <input type="email" name="email" id="email" size="30" value="<?php echo $email; ?>" required><br>
                <label for="phone">Phone:</label>
                <input type="phone" name="phone" id="phone" size="30" value="<?php echo $phone; ?>" required><br>
                <label for="address">Address:</label>
                <input type="address" name="address" id="address" size="30" value="<?php echo $address; ?>" required><br>    
                <label for="comments">Comments:</label>
                <textarea name="comments" id="comments" rows="10" cols="60" required><?php echo $comments; ?></textarea><br>
                <p>Answer the following CAPTCHA question in the box below.</p>
                <label for="captcha">What is 4 + 4?</label>
                <input type="text" name="captcha" id="captcha" size="5" required><br>
                <label for="action">&nbsp;</label>
                <input type="submit" name="action" id="action" value="Send">
            </fieldset>
        </form> 

        <footer>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>
        </footer>
        <div id="copyright">&copy; Copyright 2014 • Dayton Design Studio</div>
    </body>
</html>
