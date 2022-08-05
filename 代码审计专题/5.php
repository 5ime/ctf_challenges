<?php
include_once "flag.php";

if (isset($_GET['numeric'])) {
    $numeric = $_GET['numeric'];
    if (is_numeric($numeric)) {
        die("No No No nueric");
    }

    if ($numeric > 996) {
        die($flag5);
    }

} else{
    highlight_file(__FILE__);
}

// ?numeric=997a