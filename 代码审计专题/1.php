<?php
include_once "flag.php";

if (isset($_GET['s'])) {
    $data = $_GET['s'];
    if (is_string($data) !== FALSE) {
        die("不能为字符串类型");
    }

    if (strpos($data, "hehehehehahaha") !== FALSE) {
        die($flag1);
    }
    die("NoNoNo!");

} else{
    highlight_file(__FILE__);
}



// ?s[]