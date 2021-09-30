<?php 

    class RangoEdad {

        private $edad;

        public function __construct($edad) {
            $this->edad = $edad;
            echo "Edad: ".$this->edad;
        }

        public function calcularRango() {
            $division = explode(".", $this->edad / 10);
            $primerDigito = $division[0];

            $resultado = "";
            switch ($primerDigito) {
                case 0:
                    $resultado = "0 - 9";
                    break;
                case 1: 
                    $resultado = "10 - 19";
                    break;
                case 2: 
                    $resultado = "20 - 29";
                    break;
                case 3: 
                    $resultado = "30 - 39";
                    break;
                case 4: 
                    $resultado = "40 - 49";
                    break;
                case 5: 
                    $resultado = "50 - 59";
                    break;
                case 6: 
                    $resultado = "60 - 69";
                    break;
                case 7: 
                    $resultado = "70 - 79";
                    break;
                case 8: 
                    $resultado = "80 - 89";
                    break;
                case 9: 
                    $resultado = "90 - 99";
                    break;
            }
            return $resultado;
        }

    }

    $edad = rand(1, 99);
    $rango = new RangoEdad($edad);
    echo "<br><br>Tu rango de edad es: ".$rango->calcularRango();

?>