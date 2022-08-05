<?php
include("flag.php");
highlight_file(__FILE__);
if(isset($_GET['num'])){
    $num = $_GET['num'];
    if($num==="1449"){
        die("no no no!");
    }
    if(intval($num,0)===1449){
        echo $flag;
    }else{
        echo intval($num,0);
    }
}