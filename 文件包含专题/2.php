<?php
if (isset($_GET['file'])) {
    $file = str_replace("../", "", $_GET['file']);
    include_once $file;
}
else {
    highlight_file(__FILE__);
}

// ?file=../../flag.php