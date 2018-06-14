<?php
print_r($_POST);
echo "<br>";
if(isset($_POST['submit'])){
    $user = strtolower($_POST["user"]);
    $pass = $_POST["pass"];
    $array = array("reinaldo", "rita", "rarbara", "vinicius");
    if(strlen($user) < 5){
        echo "Type an user longer than 5. <br>";
    }
    
    if(strlen($pass) < 5){
        echo "Type a password longer than 5 <br>";
    }
    
    if(in_array($user, $array)){
        echo "Logado com sucesso <br>"; 
    }
    else{
        echo "Usuario não encontrado. <br>";
    }
}
?>
