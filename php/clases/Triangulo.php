<?php

require_once '../php/clases/FiguraGeometrica.php';

class Triangulo extends FiguraGeometrica {
    private $lado2;
    private $lado3;

    public function __construct($lado1, $lado2, $lado3) {
        parent::__construct('Triángulo', (float)$lado1); // Convertir a float
        $this->lado2 = (float)$lado2; // Convertir a float
        $this->lado3 = (float)$lado3; // Convertir a float
    }

    public function __destruct() {
        // Destructor
    }

    public function getLado2() {
        return $this->lado2;
    }

    public function setLado2($lado2) {
        $this->lado2 = $lado2;
    }

    public function getLado3() {
        return $this->lado3;
    }

    public function setLado3($lado3) {
        $this->lado3 = $lado3;
    }

    public function calcularArea() {
        $s = ($this->lado1 + $this->lado2 + $this->lado3) / 2;
        return sqrt($s * ($s - $this->lado1) * ($s - $this->lado2) * ($s - $this->lado3));
    }

    public function calcularPerimetro() {
        return $this->lado1 + $this->lado2 + $this->lado3;
    }

    public function __toString() {
        return "Lado 1: $this->lado1, Lado 2: $this->lado2, Lado 3: $this->lado3";
    }
}
