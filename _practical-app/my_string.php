<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $string = "Reinaldo";
        echo strlen($string) . "<br>";
        echo "1: " . $string .  "<br>";
        echo "2: " . strtoupper($string) . "<br>";
        echo "3: " . strtolower($string) . "<br>";
    
        if($string == "Reinaldo"){
            echo "== funciona <br>";
        }
    
        $string = $string . "2016";
        echo "concatenacao: " . $string . "<br>";
    
    
    ?>
</body>
</html>