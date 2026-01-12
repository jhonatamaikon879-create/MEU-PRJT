<?php
if ($_SERVER ["REQUEST_METHOD"]=="POST"){
    $nome =trim($_POST["nome"]);

    if (empty($nome)){
        echo "Por favor imforme seu nome. ";

    }else{
        echo "bem vindo,  $nome";
    }
    
}
?>  
