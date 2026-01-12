<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario de Notas</title>
</head>
<body>
    <form action="resultado.php" method="POST">
        <label for="name">nome</label>
        <imput for="text" id="nome" name="nome" required><br></imput>
        <label for="idade">idade</label>
        <imput for="number" id="idade" name="idade" required><br></imput>
        <label for="nota">nota</label>
        <imput for="number" id="nota" name="nota" required><br></imput>
         <button type="submit">Enviar</button>
    </form>
</body>
</html>