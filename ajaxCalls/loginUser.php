<?php
    include "../class/user.php";
    $email = $_POST['email'];
    $password =$_POST['password'];

    $user = new User();
    $user->setEmail($email);
    $user->setPassword($password);
    echo json_encode($user->validate());
?>