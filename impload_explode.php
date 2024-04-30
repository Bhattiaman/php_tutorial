<?php

// $clors = array('red','blue','yellow');
// print_r($clors);

// $res = implode(" ", $clors); // mploade is to convert the array to string 
// echo "my fav colors are .$res";

// exlode is use to convert string to array

$biodata = "My name is Aman Bhatti";
$ress = explode(" ",$biodata); // space ki wje se array bnana ho to
echo "<pre>";
print_r($ress);

foreach($ress as $val){
    echo $val;
}

$biodata = "My 1 name 1 is 1 Aman 1 Bhatti";
$ress = explode(" 1 ",$biodata); // space ki wje se array bnana ho to
echo "<pre>";
print_r($ress);

foreach($ress as $val){
    echo $val;
}

?>