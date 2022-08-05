<?php
if (isset($_GET['file'])) {
    include_once $_GET['file'];
} else {
    highlight_file(__FILE__);
}

// ?file=flag.php