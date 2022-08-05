<?php
error_reporting(0);
if(isset($_GET['args'])){
    $c = $_GET['args'];
    if(!preg_match("/flag|system|php|cat|sort|shell|\.| |\'|\`|echo|\;|\(|\:|\"|\<|\=|\/|[0-9]/i", $c)){
        eval($c);
    }
}else{
    highlight_file(__FILE__);
}