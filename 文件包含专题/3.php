<?php
if (isset($_GET['file'])) {
    $file = str_replace("..", "", $_GET['file']);
    $file = str_replace(".", "", $file);
    include_once $file;
}
else {
    highlight_file(__FILE__);
}