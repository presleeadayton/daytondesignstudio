<!DOCTYPE html>
<html>
  <head>
    <title>PHP Basics Exam</title>
    <meta charset="UTF-8">
    <meta name="author" content="Preslee Dayton">
    <style>
      label, input{
        display: block;
      }
      input{
        margin-bottom: 15px;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>PHP Basics</h1>
    </header>
  <main>
    <h1>Input Form</h1>
    <form action="index.php" method="post" id="input_form">
        <input type="hidden" name="action" value="input_form" />
  <?php
   if(!empty($inputs)){
     echo '<h2>Inputs Submitted</h2>';
     print_r($inputs);
     exit;
   }
    ?>
    <form method="post" action=".">
      <label for="firstname">First Name:</label>
      <input type="text" name="firstname" id="firstname">
      <label for="lastname">Last Name:</label>
      <input type="text" name="lastname" id="lastname">
      <label for="url">URL:</label>
      <input type="url" name="url" id="url">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email">
      <label for="submit">&nbsp;</label>
      <input type="submit" name="submit" value="Send It">
    </form>
  </main>
  <footer>
    <p><?php echo 'Last Updated: '.date('j F, Y',  getlastmod()); ?></p>
  </footer>
  </body>
</html>