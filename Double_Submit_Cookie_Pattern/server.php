<?php

if ($_POST["token"] != "") {
    if ($_POST["token"]==$_COOKIE["user"]) {
        echo '<h1>Succeefuly authenticated</h1>';
    } else {
        echo '</h1>Failed to authenticate</h1>';
    }
}
