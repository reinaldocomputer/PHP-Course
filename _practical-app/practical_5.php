<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $name = "Reinaldo";
        $age = 28;
        $dreams = array("polyglot", "money", "reign of God");
        
        //Step 1
        echo "Square root of Age: " . sqrt($age);
        echo "<br>";
        
        //Step 2
        echo "Name: " . strtoupper($name);
        echo "<br>";
        
        //Step 3
        sort($dreams);
        print_r($dreams);
        echo "<br>";
    
    ?>
</body>
</html>