<?php
$dir = "/upload/".md5($_SERVER['REMOTE_ADDR'])."/";
if (!is_dir($dir)) {
    mkdir($dir, 0777);
    chmod($dir, 0777);
}

if (isset($_FILES['file'])) {
    $name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];

    if (is_uploaded_file($tmp_name)) {
        move_uploaded_file($tmp_name, $dir.$name);
        echo "Upload Success: ".$dir.$name;
    }

    sleep(0.05);

    $filepath = $dir.$name;
    if (strpos($filepath, ".php")) {
        strpos("<?", file_get_contents($filepath));
        echo "PHP File Found!";
        @unlink($filepath);
    }
}
else {
    highlight_file(__FILE__);
}