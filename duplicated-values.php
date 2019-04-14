<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php 

function removeDuplication ($list) {
    $num = array_values(array_unique($list));
    return $num;
}

$arr = array(1, 2, 1, 4);
print_r(removeDuplication($arr));
?>    
</body>
</html>
