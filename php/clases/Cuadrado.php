<?php

require_once '../php/clases/FiguraGeometrica.php';

class Cuadrado extends FiguraGeometrica {

    public function __construct($lado1) {
        parent::__construct('Cuadrado', $lado1);
    }

    public function __destruct() {
        // Destructor
    }

    public function calcularArea() {
        return $this->lado1 * $this->lado1;
    }

    public function calcularPerimetro() {
        return 4 * $this->lado1;
    }

    public function __toString() {
        return "Lado: $this->lado1";
    }
}
