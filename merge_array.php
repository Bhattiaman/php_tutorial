<?php
echo "Question: Write a php script to combine two array and remove duplicate elemensts from an array.";

function arrayUnion($arr, $arr2){
    $merge = array_merge($arr,$arr2);
    echo "<pre>";
    print_r($merge);
    $res = array_unique($merge);
    echo "<pre>";
    print_r($res);
}

$arr = array('red','yellow', 'blue');
$arr2 = array('green','red','blue','black');
arrayUnion($arr,$arr2);

?>