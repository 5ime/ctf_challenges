<?php
if (isset($_GET['file'])) {
    $file = $_GET['file'];
    $file = str_replace("..", "", $file);
    $file = str_replace(".", "", $file);
    $file = str_replace("php://", "", $file);
    $file = str_replace("file://", "", $file);
    include_once file_get_contents($file);
} else {
    highlight_file(__FILE__);
}