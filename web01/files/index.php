<?php
// flag in ../../user/flag
highlight_file(__FILE__);

$input = $_GET['dir'];
function securePath($path)
{
    $path = preg_replace('@\.\.*@', '.', $path);
    $path = preg_replace('@\..\..*@', '-', $path);
    $path = htmlentities($path);

    return strip_tags($path);
}

$include = securePath($input);

echo($include);

if(substr($path,0,1) != '/'){
    include($include);
}else{
    echo('Please use relative path');
}