<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . "/models/model.php";


if (isset($_POST['action'])) {
    $action = $_POST['action'];
} elseif (isset($_GET['action'])) {
    $action = $_GET['action'];
}

switch ($action) {
    default:
        include 'home.php';
        break;

    case 'login':
        include $_SERVER['DOCUMENT_ROOT'] . '/pages/login.php';
        break;

    case 'Register':

        $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
        $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
        $emailregister = filter_input(INPUT_POST, 'emailregister', FILTER_SANITIZE_STRING);
        $passwordregister1 = filter_input(INPUT_POST, 'passwordregister1', FILTER_SANITIZE_STRING);
        $passwordregister2 = filter_input(INPUT_POST, 'passwordregister2', FILTER_SANITIZE_STRING);

        if (empty($firstname) || empty($lastname) || empty($emailregister) || empty($passwordregister1) || empty($passwordregister2)) { {
                $message = "All fields are required.";
                include $_SERVER['DOCUMENT_ROOT'] . '/pages/login.php';
                exit;
            }
        }
        $success = createAccount($firstname, $lastname, $emailregister, $passwordregister1);

        if ($success) {
            $message = "Your account was successfully created. Please login below.";
        } else {
            $message = "We were unable to create your account. Please try again.";
        }

        include $_SERVER['DOCUMENT_ROOT'] . '/pages/login.php';
        break;

    case 'Login':

        $emaillogin = filter_input(INPUT_POST, 'emaillogin', FILTER_SANITIZE_STRING);
        $passwordlogin = filter_input(INPUT_POST, 'passwordlogin', FILTER_SANITIZE_STRING);
        if (empty($emaillogin) || empty($passwordlogin)) { {

                $message = "All fields are required.";
                include $_SERVER['DOCUMENT_ROOT'] . '/pages/login.php';
                exit;
            }
        }
        $success = login($emaillogin, $passwordlogin);

        if ($success) {
            $_SESSION['loggedin'] = true;
            $_SESSION['name'] = $success['first_name'];
            $_SESSION['id'] = $success['id'];
            $_SESSION['access'] = $success['access'];
            header('location: /index.php?action=portfolio');
            exit;
        } else {
            $message = "We counldn't log you in. Please try again.";

            include $_SERVER['DOCUMENT_ROOT'] . '/pages/login.php';
            exit;
        }
        break;

    case 'viewusers':
        $users = getUsers();
        include $_SERVER['DOCUMENT_ROOT'] . '/pages/viewusers.php';
        break;

    case 'edituser':

        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
        $user = getUser($id);

        include $_SERVER['DOCUMENT_ROOT'] . '/pages/edituser.php';
        break;

    case 'Edit':
        $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
        $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
        updateUser($id, $firstname, $lastname, $email, $password);
        header('location: /index.php?action=viewusers');
        break;


    case 'deleteuser':
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
        deleteuser($id);
        header('location: /index.php?action=viewusers');
        break;

    case 'portfolio':
        $portfolio = getPortfolio();
        include $_SERVER['DOCUMENT_ROOT'] . '/pages/portfolio.php';
        break;

    case 'portfolioPage':
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
        $design = getDesign($id);
        include $_SERVER['DOCUMENT_ROOT'] . '/pages/portfolioPage.php';
        break;

    case 'editdesign':
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
        $design = getDesign($id);

        include $_SERVER['DOCUMENT_ROOT'] . '/pages/editdesign.php';
        break;

    case 'deletedesign':
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
        deleteDesign($id);
        header('location: /index.php?action=viewdesigns');
        break;

    case 'editdesignsubmit':
        $design_name = filter_input(INPUT_POST, 'design_name', FILTER_SANITIZE_STRING);
        $design_tag = filter_input(INPUT_POST, 'design_tag', FILTER_SANITIZE_STRING);
        $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
        updateDesign($id, $design_name, $design_tag, $description);
        header('location: /index.php?action=viewdesigns');
        break;

    case 'viewdesigns':
        $portfolio = getPortfolio();
        include $_SERVER['DOCUMENT_ROOT'] . '/pages/viewdesigns.php';
        break;

    case 'adddesign':
        include $_SERVER['DOCUMENT_ROOT'] . '/pages/adddesign.php';
        break;

    case 'adddesignsubmit':
        $design_name = filter_input(INPUT_POST, 'design_name', FILTER_SANITIZE_STRING);
        $design_tag = filter_input(INPUT_POST, 'design_tag', FILTER_SANITIZE_STRING);
        $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
        addDesign($design_name, $design_tag, $description);
        header('location: /index.php?action=viewdesigns');
        break;

    case 'admin':
        include $_SERVER['DOCUMENT_ROOT'] . '/pages/admin.php';
        break;

    case 'logout':
        $_SESSION = array();
        session_destroy();
        header('location: /index.php?action=login');
        break;

    case 'about':
        include $_SERVER['DOCUMENT_ROOT'] . '/pages/about.php';
        break;

    case 'contactus':
        include $_SERVER['DOCUMENT_ROOT'] . '/pages/contactus.php';
        break;

    case 'investment':
        include $_SERVER['DOCUMENT_ROOT'] . '/pages/investment.php';
        break;

    case 'teachingpresentation':
        include $_SERVER['DOCUMENT_ROOT'] . '/assessments/teaching-presentation.php';
        break;

    case 'siteplan':
        include $_SERVER['DOCUMENT_ROOT'] . '/assessments/site-plan.php';
        break;

    case 'Send':
        $name = $_POST['name'];

        $email = $_POST['email'];

        $subject = $_POST['subject'];

        $message = $_POST['message'];

        $captcha = strtolower($_POST['captcha']);

        if (empty($name) || empty($email) || empty($subject) || empty($message)) {

            $reply = 'Sorry, one or more fields are empty. All fields are     

            required.';

            include $_SERVER['DOCUMENT_ROOT'] . '/pages/contactus.php';

            exit;

// Check the captcha

            if (empty($captcha) || $captcha != '8') {

                $reply = 'The captcha answer is incorrect.';

                include $_SERVER['DOCUMENT_ROOT'] . '/pages/contactus.php';

                exit;
            }
        } else {


// Assemble the message

            $finalmessage = "Name: $firstname $lastname \n";

            $finalmessage .= "Email: $email \n";

            $finalmessage .= "Subject: $subject \n";

            $finalmessage .= "Message: \n $message";

// Send the message

            $to = 'presleeadayton@gmail.com';

            $from = "From: $email";

            $result = mail($to, $subject, $finalmessage, $from);

// Let the client know what happened

            if ($result == TRUE) {

                $reply = "Thank you $name for contacting us. We will get back to you as soon as possible.";

                unset($name);

                unset($email);

                unset($subject);

                unset($message);

                include $_SERVER['DOCUMENT_ROOT'] . '/pages/contactus.php';

                exit;
            } else {

                $reply = "Sorry $name but there was an error and the message could not be sent.";

                unset($name);

                unset($email);

                unset($subject);

                unset($message);

                include $_SERVER['DOCUMENT_ROOT'] . '/pages/contactus.php';

                exit;
            }
        }
        break;
}
?>