<?php
include_once "flag.php";

$flag = 'fake_flag';

if (count($_REQUEST) > 0) {
    extract($_REQUEST);
    if (isset($check)) {
        $content = file_get_contents($flag);
        if ($content === $check) {
            die($flag4);
        }
        else {
            die("error!");
        }
    }

} else{
    highlight_file(__FILE__);
}

// ?flag=php://input&check=