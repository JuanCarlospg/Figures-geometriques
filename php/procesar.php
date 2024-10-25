<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['tipoFigura'] = $_POST['tipoFigura'];
    header('Location: ../php/introducir_lados.php');
    exit();
}
?>
