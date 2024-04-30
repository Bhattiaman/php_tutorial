<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        loop through the number 1 to 100
    </p>
     
    <?php
    // for($i = 1; $i <= 100; $i++){
    //     // echo $i;
    //     // echo "</br>";
    //     if($i % 3 == 0){
    //         echo "FIZZ";
    //         echo "</br>";
    //     }else if($i % 5 == 0){
    //         echo "BUZZ";
    //         echo "</br>";
    //     }else if(($i % 3 == 0) && ($i % 5 == 0)){
    //         echo "FIZZ BUZZ";
    //         echo "</br>";
    //     }else{
    //         echo $i ."</br>";
    //     }
    // }
    ?>

    <h3>find length of the words or sentence</h3>
    <?php
    // $st = "Aman";
    $str = "Aman Bhatti";
    // echo strlen($str)."</br>";
    // echo strlen($st);
    echo "count the number of words in a string in php"."</br>";
    // echo str_word_count($str);

    echo "Replace the character/words in a string"." </br>";
    // str_replace(Search, replace, string);
    // echo str_replace("Bhatti", "Singh", $str);
    echo "Replace the character/words in a string"." </br>";
    ?>
    
    
</body>
</html>


Cost and Salt => for more secure the password => cost ->  means to give the time to generate the password_get_info  
                 and for -> Salt -> means to give extra value which is added in paassword
                 => it take atleast 22  characters for generating salt.
                 => we can use crypt() function for generateing password with salt.
                 => crypt() function will return encrypted password.