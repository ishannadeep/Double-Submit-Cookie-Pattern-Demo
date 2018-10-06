<?php

if ($_POST['userName'] == "ishan" && $_POST['password'] == "ishan123") {

    $Name = $_POST['userName'];

    $cookie = $_COOKIE["user"];

    echo $cookie;
    header("Location: form.html"); /* Redirect browser */
} else {
    echo 'Faild to authenticate';
}
?>