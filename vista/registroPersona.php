<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro persona</title>
</head>
<body>
    <form action="../controlador/ctrlPersona.php" method="post">
        <label for="nombres">Nombres:</label>
        <input type="text" id="nombres" name="nombres">
        <hr>
        <label for="papellido">Primer Apellido:</label>
        <input type="text" name="papellido" id="papellido">
        <hr>
        <label for="sapellido">Segundo Apellido:</label>
        <input type="text" id="sapellido" name="sapellido">
        <hr>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>