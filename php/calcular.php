<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calcular</title>
    <link rel="stylesheet" href="../css/styles.css"> 
</head>
<body>
    <div class="container" style="border: 5px solid black;">
        <?php
        session_start();

        require_once '../php/clases/FiguraGeometrica.php';
        require_once '../php/clases/Triangulo.php';
        require_once '../php/clases/Rectangulo.php';
        require_once '../php/clases/Cuadrado.php';
        require_once '../php/clases/Circulo.php';

        $tipoFigura = $_SESSION['tipoFigura'] ?? '';
        $lado1 = isset($_POST['lado1']) ? (float)$_POST['lado1'] : 0;
        $lado2 = isset($_POST['lado2']) ? (float)$_POST['lado2'] : 0;
        $lado3 = isset($_POST['lado3']) ? (float)$_POST['lado3'] : 0;

        // Validar que los lados sean positivos
        if ($lado1 <= 0 || $lado2 <= 0 || ($tipoFigura == 'triangulo' && $lado3 <= 0)) {
            die('Todos los lados deben ser números positivos.');
        }

        switch ($tipoFigura) {
            case 'triangulo':
                $figura = new Triangulo($lado1, $lado2, $lado3);
                break;
            case 'rectangulo':
                $figura = new Rectangulo($lado1, $lado2);
                break;
            case 'cuadrado':
                $figura = new Cuadrado($lado1);
                break;
            case 'circulo':
                $figura = new Circulo($lado1);
                break;
            default:
                die('Tipo de figura no válido.');
        }

        echo "Tipo de figura: " . $figura->getTipoFigura() . "<br>";
        echo "Lados: " . $figura . "<br>";
        echo "Área: " . $figura->calcularArea() . "<br>";
        echo "Perímetro: " . $figura->calcularPerimetro() . "<br>";
        ?>
    </div>
</body>
</html>
