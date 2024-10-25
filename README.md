# Figures-geometriques

Ejercicio de aplicación práctica de programación orientada a objetos con PHP. Este proyecto contiene clases para representar diferentes figuras geométricas y métodos para calcular sus áreas y perímetros.

## Objetivos

Implementar clases y relaciones entre ellas para realizar cálculos geométricos básicos, utilizando principios de programación orientada a objetos.

## Figuras implementadas

- **Triángulo**
- **Rectángulo**
- **Cuadrado**
- **Círculo**

Cada clase geométrica contiene métodos para calcular:

- **Área**
- **Perímetro**

## Estructura del Proyecto

El proyecto sigue la siguiente estructura de archivos y carpetas:

```plaintext
Figures-geometriques/
├── css/
│   └── styles.css           # Estilos CSS del proyecto
├── img/
│   └── fondo.jpg            # Imagen de fondo utilizada en la interfaz
├── index.php                # Página principal del proyecto
├── js/
│   └── validacion.js        # Script para la validación del formulario
└── php/
    ├── clases/
    │   ├── Circulo.php         # Clase para Círculo
    │   ├── Cuadrado.php        # Clase para Cuadrado
    │   ├── FiguraGeometrica.php# Clase base Figura Geométrica
    │   ├── Rectangulo.php      # Clase para Rectángulo
    │   └── Triangulo.php       # Clase para Triángulo
    ├── calcular.php            # Lógica de cálculo
    ├── introducir_lados.php    # Entrada de datos
    └── procesar.php            # Procesamiento de datos
