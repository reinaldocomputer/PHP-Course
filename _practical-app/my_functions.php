<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        global $teste;
        $teste = 1;
    
        function message($number){
            echo $number . ": Minha mensagem <br>";
            $number = 5;
            global $teste;
            $teste++;
            return $number;
        }
    
        $number = 1;
        $number = message($number);
        echo "number: " . $number . "<br> teste: " . $teste . "<br>";
    
    
        
    ?>
    
</body>
</html>