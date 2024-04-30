<?php

// $arr = [2,3,4,5];
$arr = array(2,3,4,5);
$n = sizeof($arr);

echo "<pre>";
print_r($arr);
echo "</br>";
for($i = 0; $i < $n; $i++){
    echo $arr[$i] ."</br>";
}
echo "</br>";

foreach ($arr as $namess) {
    # code...
    echo $namess;
}


?>