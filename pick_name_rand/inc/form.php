<?php
/** @var TYPE_NAME $conn */

$firstName = $_POST['firstName'] ??'';
$lastName = $_POST['lastName'] ?? '';
$email  = $_POST['email'] ?? '';

$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => ''
];

if (isset($_POST['submit'])) {

    if (empty($firstName)) {
        $errors['firstNameError'] = 'first name not found';
    }
    if (empty($lastName)) {
        $errors['lastNameError'] = 'last name not found';
    }
    if (empty($email)) {
        $errors['emailError'] = 'email not found';
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['emailError'] = 'invalid Email';
    }

    if (!array_filter($errors)){

        $firstName = mysqli_real_escape_string($conn, $_POST['firstName']) ;
        $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
        $email  = mysqli_real_escape_string($conn, $_POST['email']);

        $sql = "INSERT INTO users(firstName, lastName, email) 
            values ('$firstName', '$lastName', '$email')";

        if (mysqli_query($conn, $sql)) {
            header('location: ' . $_SERVER['PHP_SELF']);
        } else {
            echo 'ERROR : ' . mysqli_error($conn);
        }
    }
}