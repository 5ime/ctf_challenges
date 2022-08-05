<?php
include_once "flag.php";

if (isset($_GET['password'])) {
    $password = $_GET['password'];

    if (strpos($password, "admin123123123")) {
        die("not allowed!");
    }

    $password = urldecode($_GET['password']);
    if ($password === "admin123123123") {
        die($flag7);
    }
    else {
        die("Access Denied!");
    }

} else{
    highlight_file(__FILE__);
}

// ?password=%25%36%31%25%36%34%25%36%64%25%36%39%25%36%65%25%33%31%25%33%32%25%33%33%25%33%31%25%33%32%25%33%33%25%33%31%25%33%32%25%33%33