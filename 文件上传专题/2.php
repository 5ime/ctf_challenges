<?php
$dir = "./upload/".md5($_SERVER['REMOTE_ADDR'])."/";
if (!is_dir($dir)) {
    mkdir($dir, 0777);
    chmod($dir, 0777);
}

if (isset($_FILES['file'])) {
    $name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $black_lists = array('php', 'php3', 'php4', 'php5');

    if (is_uploaded_file($tmp_name)) {
        foreach ($black_lists as $black_word) {
            if (preg_match("/\.".$black_word."/", $name)) {
                die("No No No!");
            }
        }

        move_uploaded_file($tmp_name, $dir.$name);
        echo "Upload Success: ".$dir.$name;
    }
}
else {
    highlight_file(__FILE__);
}