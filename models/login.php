<?php

$con = mysqli_connect("localhost", "daytonde", "DaytonBaby0515!", "daytonde_daytondesignstudio");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$emaillogin = mysqli_real_escape_string($con, $_POST['emaillogin']);
$passwordlogin = mysqli_real_escape_string($con, $_POST['passwordlogin']);

if ($result = mysqli_query($con, "SELECT email, password FROM Users_Information WHERE email='$emaillogin' AND password='$passwordlogin'")) {
    echo "Success";
} else {
    echo "False";
}
?>