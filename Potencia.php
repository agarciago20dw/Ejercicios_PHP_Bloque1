<?php

    class Potencia {
        private $valor_potencia;
        private $cantidad;

        public function __construct($valor_potencia, $cantidad) {
            $this->valor_potencia = $valor_potencia;
            $this->cantidad = $cantidad;
        }

        public function mostrarNumeros() {
            echo "Potencia: ".$this->valor_potencia.", Cantidad: ".$this->cantidad."<br>";
            $resultado = 0;
            $i = 1;
            $seguir = true;
            while ($seguir) {
                $resultado = pow($i, $this->valor_potencia);
                if ($resultado < $this->cantidad) {
                    echo "<br>".$i." - ".$resultado;
                }
                else {
                    $seguir = false;
                }
                $i++;
            }
        }
    }

    $valor_potencia = rand(1, 9);
    $cantidad = rand(1, 100);
    $potencia1 = new Potencia ($valor_potencia, $cantidad);
    $potencia1->mostrarNumeros();

?>