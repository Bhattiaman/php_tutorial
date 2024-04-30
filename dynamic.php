
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
    <p>Enter your fav color </p>
    <input type="text" name="favcolor">
    <input  type="submit" name="submit" value="Check Now">
    </form>
    <p> My fav color is 
    <?php
    if(isset($_POST['submit'])){
        $favColor = $_POST['favcolor'];
        echo $favColor;
    }

    // create random number in php 
    $random_numebr = rand(1,200);
    echo "</br>";
    echo $random_numebr;
?>    
</p>
</body>
</html>
