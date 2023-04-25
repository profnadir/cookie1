<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "john" && $password == "123") {
       setcookie('username', $username,time()-160);
    } 
}


echo $message = "Bonjour ".$_COOKIE['username'];
    


    