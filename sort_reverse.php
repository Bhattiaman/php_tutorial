<?php
$student = array('aman','bhatti');
// sort($student);
// rsort($student);
// foreach($student as $names){
//     echo $names;
// }

// pop , push, shift, unshift

echo "<pre>";
print_r($student);

array_pop($student);
echo "<pre>";
print_r($student);

array_push($student,'Singh');
echo "<pre>";
print_r($student);

// array_shift($student);
// echo "<pre>";
// print_r($student);

array_unshift($student);
echo "<pre>";
print_r($student);

?>

