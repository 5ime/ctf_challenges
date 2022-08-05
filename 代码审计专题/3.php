<?php
include_once "flag.php";

$count_number = 0;
$count['a'] = 1;

if (count($_GET) > 0) {
    foreach ($_GET as $key => $value) {
        $count[] = $value;
        $count_number += 1;
    }
    if ($count[10] === 'hacker!') {
        die($flag3);
    }
    else {
        die("NoNoNo!");
    }

} else{
    highlight_file(__FILE__);
}


// ?0&1&2&3&4&5&6&7&8&9&10=hacker!