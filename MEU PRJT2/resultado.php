
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $nota = $_POST['nota'];

   
    if (empty($nome) && empty($idade) && !is_numeric($nota)) {
        $erro = "Campos inválidos. Verifique os dados inseridos.";
    } else {
   
        if ($nota >= 7) {
            $situacao = "Aprovado";
        } elseif ($nota >= 5) {
            $situacao = "Recuperação";
        } else {
            $situacao = "Reprovado";
        }
    }
}
?>
<?php
if ($_SERVER ["REQUEST_METHOD"]=="POST"){
    $nome =trim($_POST["nome"]);
 $idade =trim($_POST["idade"]);

    if (empty($nome)){
        echo "Por favor imforme seu nome. ";

    }else{
        echo "bem vindo,  $nome";

    }if (empty($idade)) {
      echo "irforme sua idade ";

    } else {
        echo "  sua idade, $idade";
        
   
    if (empty($nome) && empty($idade) && !is_numeric($nota)) {
        $erro = "Campos inválidos. Verifique os dados inseridos.";
    } else {
   
        if ($nota >= 7) {
            $situacao = "Aprovado";
        } elseif ($nota >= 5) {
            $situacao = "Recuperação";
        } else {
            $situacao = "Reprovado";
        }
    } 
    
}
}
?>