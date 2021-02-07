<?php

// prevent direct access to the file 
if(!$_POST['isSubmitted']){
    header("Location: /");
    exit();
}


var_dump($_POST);

$errors = [];
if(empty($_POST['firstname'])){
    $errors['firstname'] = 'firstname is required';
}
if(empty($_POST['lastname'])){
    $errors['lastname'] = 'lastname is required';
}
if(empty($_POST['gender'])){
    $errors['gender'] = 'gender is required';
}

if(empty($_POST['email'])){
    $errors['email'] = 'email is required';
}

if(empty($_POST['phone'])){
    $errors['phone'] = 'phone is required';
}

if(empty($_POST['password'])){
    $errors['password'] = 'password is required';
}


if(empty($_POST['department'])){
    $errors['department'] = 'department is required';
}


if(empty($_POST['skills'])){
    $errors['skills'] = 'skills is required';
}

if(empty($_POST['captcha'])){
    $errors['captcha'] = 'captcha is required';
}

if($_POST['captcha'] != $_POST['captcha_verify']){
    $errors['captcha_verify'] = 'wrong captcha';
}



if(!empty($errors))
{
    session_start();

    $_SESSION['errors'] = json_encode($errors);
    header("Location: /");
    exit();
}





