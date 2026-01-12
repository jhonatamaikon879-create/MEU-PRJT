<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario de Notas</title>
</head>
<body>
    <form action="resultado.php" method="POST">
      <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br><br>
            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" required><br><br>
            <label for="nota">Nota final (0 a 10):</label>
            <input type="number" id="nota" name="nota" min="0" max="10" required><br><br>
            <input type="submit" value="Enviar">
    </form>
</body>
</html>