<?php

if (isset($_POST['submit'])){
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $url = $_POST['url'];
  $email = $_POST['email'];
  
  $inputs = array('firstname'=>$firstname, 'lastname'=>$lastname, 'url'=>$url, 'email'=>$email);
  include 'view2.php';
  header("Location: http://www.daytondesignstudio.com/");
  
  exit;
  
} else {
  include 'view2.php';
  
  exit;
  
}
?>