<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $number = 1;
        if($number != 1){
            echo "I hate PHP";
        }elseif($number > 0 ){
            echo "I love PHP <br>";
            for($i = 0; $i < 10; $i++){
                echo $i . "<br>";
            }
        }
        else{
            echo "I'd love PHP";
        }
        
    switch($number){
        case 1:
            echo "<br> Volte sempre <br>";
            break;
        
        case 2:
            echo "<br>Why you don't love PHP?<br>"; 
            break;
            
        case 3:
            echo "<br>Why you don't love PHP?<br>";
            break;
            
        case 4:
            echo "<br>Why you don't love PHP?<br>";
            break;
            
        case 5:
            echo "<br>Why you don't love PHP?<br>";
            break;
            
            
    }
    
    ?>
</body>
</html>