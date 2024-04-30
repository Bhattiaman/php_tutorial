<!-- All function in one file  -->

<?php
echo "<h3>All Function in this file </h3> </br>   ";
// function sayMyName(){
//     echo "My name is Aman Bhatii.";
// }

// sayMyName();

echo "<h3> Passing Function Parameters & Function Arguments values in PHP </h3> </br>";
// $name = "Aman Bhatti";
// function sayMyName($name,$a,$b){ // func parameters
//     echo $a + $b ."</br>";
//     echo "My name is $name.";
// }
// sayMyName($name,4,5); // arguments


echo "<h3>Default Arguments Function</h3> </br>";
// function multi($a,$b = 5){ // $b default parameter for value
//        echo  $a + $b . "</br>";
// }

// multi(10);// Pass single argument


echo " <h3> Functions Returning Value </h3> </br>";
$name = "Aman Bhatti";
function sayMyName($name,$a,$b){ // func parameters
    echo $a + $b ."</br>";
    return "My name is $name.";
}

echo sayMyName($name,4,5);




?>