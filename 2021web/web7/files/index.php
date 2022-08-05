<?php
error_reporting(0);
if(isset($_GET['args'])){
    $c = $_GET['args'];
    if(!preg_match("/flag|php|file/i", $c)){
        include($c);
        echo $flag;
    }
}else{
    highlight_file(__FILE__);
}