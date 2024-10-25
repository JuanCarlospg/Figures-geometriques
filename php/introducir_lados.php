<?php
session_start();

$tipoFigura = $_SESSION['tipoFigura'] ?? '';

function mostrarFormulario($tipoFigura) {
    switch ($tipoFigura) {
        case 'triangulo':
            echo '<form id="formulario" action="../php/calcular.php" method="post" onsubmit="return validarFormulario()">
                    <label for="lado1">Lado 1:</label>
                    <input type="number" name="lado1" onblur="validarCampo()">
                    <span class="error"></span>
                    <label for="lado2">Lado 2:</label>
                    <input type="number" name="lado2" onblur="validarCampo()">
                    <span class="error"></span>
                    <label for="lado3">Lado 3:</label>
                    <input type="number" name="lado3" onblur="validarCampo()">
                    <span class="error"></span>
                    <button type="submit">Calcular</button>
                  </form>';
            break;
        case 'rectangulo':
            echo '<form action="../php/calcular.php" method="post" onsubmit="return validarFormulario()">
                    <label for="lado1">Lado 1:</label>
                    <input type="number" name="lado1" onblur="validarCampo()">
                    <span class="error"></span>
                    <label for="lado2">Lado 2:</label>
                    <input type="number" name="lado2" onblur="validarCampo()">
                    <span class="error"></span>
                    <button type="submit">Calcular</button>
                  </form>';
            break;
        case 'cuadrado':
            echo '<form action="../php/calcular.php" method="post" onsubmit="return validarFormulario()">
                    <label for="lado1">Lado:</label>
                    <input type="number" name="lado1" onblur="validarCampo()">
                    <span class="error"></span>
                    <button type="submit">Calcular</button>
                  </form>';
            break;
        case 'circulo':
            echo '<form action="../php/calcular.php" method="post" onsubmit="return validarFormulario()">
                    <label for="radio">Radio:</label>
                    <input type="number" name="lado1" onblur="validarCampo()">
                    <span class="error"></span>
                    <button type="submit">Calcular</button>
                  </form>';
            break;
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Introducir Lados</title>
    <link rel="stylesheet" href="../css/styles.css"> 
</head>
<body>
    <div class="container" style="border: 5px solid black;">
        <?php mostrarFormulario($tipoFigura); ?>
    </div>
    <script src="../js/validacion.js"></script>
</body>
</html> 
