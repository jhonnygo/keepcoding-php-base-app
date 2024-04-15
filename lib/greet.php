<?php
class Saludo {
    private $nombre;

    // Constructor que acepta un nombre como argumento
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    // Método para generar el saludo
    public function generarSaludo() {
        return "¡Hola, " . $this->nombre . "! Bienvenido.";
    }
}

// Verifica si se ha proporcionado un nombre como argumento
if ($argc < 2) {
    echo "Por favor, proporciona un nombre como argumento.\n";
    exit(1); // Salida con código de error
}

// Recoge el nombre del primer argumento
$nombre = $argv[1];

// Crea una instancia de la clase Saludo
$saludo = new Saludo($nombre);

// Genera y muestra el saludo
echo $saludo->generarSaludo() . "\n";
