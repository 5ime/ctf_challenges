<?php
include_once "flag.php";

if (isset($_GET['username']) && isset($_GET['password'])) {
    $username = $_GET['username'];
    $password = $_GET['password'];
    if ($username === $password) {
        die("用户名和密码不能相同");
    }

    if (sha1($username) === sha1($password)) {
        die($flag2);
    }
    else {
        die("用户名和密码必须相等");
    }

} else{
    highlight_file(__FILE__);
}


// ?username[]&password[1]