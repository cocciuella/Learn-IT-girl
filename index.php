<?php
error_reporting(E_ALL);
ini_set('display_errors',true);

$list = "";
$list = $list. '<ul>';
for ($x=1; $x<=100; $x++){
    $list .="<li>" .(100 - $x). "... bottles on the wall </li>";

}
$list = $list. '</ul>';
echo ($list);

