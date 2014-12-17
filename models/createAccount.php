<?php

$con = mysqli_connect("localhost", "daytonde", "DaytonBaby0515!", "daytonde_daytondesignstudio");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$emailregister = mysqli_real_escape_string($con, $_POST['emailregister']);
$passwordregister1 = mysqli_real_escape_string($con, $_POST['passwordregister1']);

$query = "INSERT INTO Users_Information VALUES (NULL, '$firstname', '$lastname', '$emailregister', '$passwordregister1', 1, now(), 1, now())";
if (mysqli_query($con, $query)) {
    echo "Success.";
}
?>