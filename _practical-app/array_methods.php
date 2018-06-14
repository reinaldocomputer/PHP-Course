<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $list = [6,2,3,4,5,1];
        echo "max value: " . max($list) . "<br>" ;
        echo "min value: " . min($list) . "<br>" ;
        print_r($list);
        sort($list);
        echo "<br>";
        print_r($list);
    ?>
</body>
</html>