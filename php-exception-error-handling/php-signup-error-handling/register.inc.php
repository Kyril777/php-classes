<?php
    // Checks if user clicks the register button.
    if (isset($_POST['submit'])) {

        // Include database connection.
        include_once 'dbh.inc.php';
        // Retreive data from form.
        $first = $_POST['firstname'];
        $last = $_POST['lastname'];
        $email = $_POST['email'];
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];

        // Activate if empty inputs.
        if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
            header("Location: ../index.php?signup=empty");
            exit();
        } else {
            // Check for valid input characters.
            if (!preg_match("/^[a-zA-Z]*$", $first) || !preg_match("/^[a-zA-Z]*$", $last)) {
                header("Location: ../index.php?signup=char");
                exit();
            } else {
                // Check for valid email.
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: ../index.php?signup=email");
                    exit();
                } else {
                    header("Location: ../index.php?signup=success");
                    exit();
                }
            }
        }
    } else {
        header("Location: ../index.php");
        exit();
    }