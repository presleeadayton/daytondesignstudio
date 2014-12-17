<?php

function createAccount($firstname, $lastname, $emailregister, $passwordregister1) {
    $con = mysqli_connect("localhost", "daytonde", "DaytonBaby0515!", "daytonde_daytondesignstudio");
    
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    $query = "INSERT INTO Users_Information VALUES (NULL, '$firstname', '$lastname', '$emailregister', '$passwordregister1', 1, now(), 1, now(), 'user')";
    if (mysqli_query($con, $query)) {
        return true;
    } else {
        return false;
    }
}

function login($emaillogin, $passwordlogin) {
    $con = mysqli_connect("localhost", "daytonde", "DaytonBaby0515!", "daytonde_daytondesignstudio");

    if (mysqli_connect_errno()) {

        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    if ($result = mysqli_query($con, "SELECT first_name, id, access FROM Users_Information WHERE email='$emaillogin' AND password='$passwordlogin'")) {
        $user = $result->fetch_assoc();
        return $user;
    } else {
        return false;
    }
}

function getUsers() {
    $con = mysqli_connect("localhost", "daytonde", "DaytonBaby0515!", "daytonde_daytondesignstudio");

    if ($result = mysqli_query($con, "SELECT * FROM Users_Information")) {
        $users = array();
        for ($i = 0; $row = $result->fetch_assoc(); $i++) {
            $users[$i] = $row;
        }
        return $users;
    } else {
        return false;
    }
}

function getUser($id) {
    $con = mysqli_connect("localhost", "daytonde", "DaytonBaby0515!", "daytonde_daytondesignstudio");

    if ($result = mysqli_query($con, "SELECT * FROM Users_Information WHERE id='$id'")) {

        $user = $result->fetch_assoc();

        return $user;
    } else {
        return false;
    }
}

function updateUser($id, $first_name, $last_name, $email, $password, $admin = 'user') {
    $con = mysqli_connect("localhost", "daytonde", "DaytonBaby0515!", "daytonde_daytondesignstudio");

    if ($result = mysqli_query($con, "UPDATE Users_Information SET first_name='$first_name',"
            . "last_name='$last_name',email='$email',password='$password',access='$admin' WHERE id='$id'")) {
        return true;
    } else {
        return false;
    }
}

function deleteuser($id) {
    $con = mysqli_connect("localhost", "daytonde", "DaytonBaby0515!", "daytonde_daytondesignstudio");

    if ($result = mysqli_query($con, "DELETE FROM Users_Information WHERE id='$id'")) {
        return true;
    } else {
        return false;
    }
}

function getPortfolio() {
    $con = mysqli_connect("localhost", "daytonde", "DaytonBaby0515!", "daytonde_daytondesignstudio");

    if ($result = mysqli_query($con, "SELECT * FROM Portfolio")) {
        $portfolio = array();
        for ($i = 0; $row = $result->fetch_assoc(); $i++) {
            $portfolio[$i] = $row;
        }
        return $portfolio;
    } else {
        return false;
    }
}

function getDesign($id) {
    $con = mysqli_connect("localhost", "daytonde", "DaytonBaby0515!", "daytonde_daytondesignstudio");

    if ($result = mysqli_query($con, "SELECT * FROM Portfolio WHERE id='$id'")) {

        $design = $result->fetch_assoc();

        return $design;
    } else {
        return false;
    }
}

function addDesign($design_name, $design_tag, $description, $image_url = '/images/default.gif') {
    $con = mysqli_connect("localhost", "daytonde", "DaytonBaby0515!", "daytonde_daytondesignstudio");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $query = "INSERT INTO Portfolio VALUES (NULL, '$design_name', '$design_tag', '$image_url', '$description')";
    if (mysqli_query($con, $query)) {
        return true;
    } else {
        return false;
    }
}

function updateDesign($id, $design_name, $design_tag, $description) {
    $con = mysqli_connect("localhost", "daytonde", "DaytonBaby0515!", "daytonde_daytondesignstudio");

    if ($result = mysqli_query($con, "UPDATE Portfolio SET design_name='$design_name',"
            . "design_tag='$design_tag',description='$description' WHERE id='$id'")) {
        return true;
    } else {
        return false;
    }
}

function deleteDesign($id) {
    $con = mysqli_connect("localhost", "daytonde", "DaytonBaby0515!", "daytonde_daytondesignstudio");

    if ($result = mysqli_query($con, "DELETE FROM Portfolio WHERE id='$id'")) {
        return true;
    } else {
        return false;
    }
}

?>