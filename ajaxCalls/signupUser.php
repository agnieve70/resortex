<?php
    include "../class/user.php";

    $user = new User();
    $user->setFirstname($_POST['firstname']);
    $user->setLastname($_POST['lastname']);
    $user->setEmail($_POST['email']);
    $user->setPassword(password_hash($_POST['password'], PASSWORD_DEFAULT));
    $user->setContact($_POST['contact']);
    echo json_encode($user->register());
?>