<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projeto web -pagina incial</title>
</head>
<body>
    <form action="calcular.php" method="POST">
           
            <label for="tarefas">tarefas </label>
            <input type="number" id="tarefas" name="tarefas" required><br><br>

            <label for="atrasos">atrasos</label>
            <input type="number" id=" atrasos" name=" atrasos" required><br><br>
            
            <button type="submit">calcular desempenho </button>
</form>
</body>
</html>