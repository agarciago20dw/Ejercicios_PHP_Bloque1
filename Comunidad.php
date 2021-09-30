<?php
    class Comunidad {

        private $num_pisos;
        private $num_puertas;

        public function __construct($num_pisos, $num_puertas) {
            $this->num_pisos = $num_pisos;
            $this->num_puertas = $num_puertas;

            echo "Nº de Pisos: ".$this->num_pisos;
            echo "<br>Nº de Puertas: ".$this->num_puertas;
        }

        public function calcularViviendas() {
            return $this->num_pisos * $this->num_puertas;
        }

    }

    $num_pisos = rand(1, 100);
    $num_puertas = rand(1, 5);

    $comunidad1 = new Comunidad($num_pisos, $num_puertas);
    echo "<br><br>En esta comunidad hay ".$comunidad1->calcularViviendas()." viviendas";
?>