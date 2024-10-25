<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página Principal</title>
    <link rel="stylesheet" href="./css/styles.css"> 
</head>
<body>
    <div class="container" style="border: 5px solid black;">
        <form action="./php/procesar.php" method="post">
            <label for="tipoFigura">Elige el tipo de figura:</label>
            <select name="tipoFigura" id="tipoFigura">
                <option value="triangulo">Triángulo</option>
                <option value="rectangulo">Rectángulo</option>
                <option value="cuadrado">Cuadrado</option>
                <option value="circulo">Círculo</option>
            </select>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
