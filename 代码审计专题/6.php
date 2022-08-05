<?php
include_once "flag.php";

if (isset($_GET['check'])) {
    $check = $_GET['check'];
    
    if (preg_match("/^[A-Za-z0-9]+/", $check) === FALSE) {
        die("输入内容只能包含数字和字母");
    }

    if (strlen($check) < 8 and $check > 99999999) {
        die($flag6);
    }
    else {
        die("nonononono");
    }

} else{
    highlight_file(__FILE__);
}

// ?check=1e8