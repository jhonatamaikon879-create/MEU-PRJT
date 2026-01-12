
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