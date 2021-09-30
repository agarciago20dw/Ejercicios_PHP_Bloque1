<?php

    class EnteroPositivo {
        private $num;

        public function __construct($num) {
            $this->num = $num;
        }

        public function mostrarSerie() {
            echo "Número: ".$this->num."<br><br>";
            $resultado = $this->num;
            while ($resultado > 1) {
                if (($resultado % 2) == 0) {
                    $resultado = $resultado / 2;
                }
                else {
                    $resultado = ($resultado * 3) + 1;
                }
                if ($resultado != 1) {
                    echo $resultado.", ";
                }
                else {
                    echo $resultado.".";
                }
                
            }
        }
    }

    $num = rand(1, 99);
    $entero1 = new EnteroPositivo($num);
    $entero1->mostrarSerie();

?>