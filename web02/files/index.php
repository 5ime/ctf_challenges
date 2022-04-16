<?php
highlight_file(__FILE__);
require "flag.php";

$input = $_GET['num'];
$input = str_replace(".", "", $input);

function check_input($value){
    if(strlen($value) > "3"){
        if($value < "1" && $value > "0.99"){
            if(strlen($value) <= "4"){
                return 1;
            }
        }
    }
}

if(check_input($input)){
    print("You win! Flag is: $flag");
}else{
    print("Wrong input!");
}