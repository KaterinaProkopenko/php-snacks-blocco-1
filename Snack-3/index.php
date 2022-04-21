<?php 
    $string = 'c,i,n,q,u,e';

    $array = explode(',', $string);
    
    $newArray = [];

    foreach($array as $element){
        $newArray[$element] = $element; 
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php var_dump($newArray) ; ?>
    </pre>
</body>
</html>