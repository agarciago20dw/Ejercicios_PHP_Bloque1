<?php
    class Mayor {

        private $numeros;

        public function __construct($numeros) {
            $this->numeros = $numeros;
            for ($i = 0; $i < count($this->numeros); $i++) { 
                echo $this->numeros[$i]."<br>";
            }
        }

        public function calcularMayor() {
            $mayor = 0;
            for ($i = 0; $i < count($this->numeros); $i++) { 
                if ($this->numeros[$i] > $mayor) {
                    $mayor = $this->numeros[$i];
                }
            }
            return $mayor;
        }
    }

    $numeros;
    for ($i=0; $i < 3; $i++) { 
        $numeros[$i] = rand(0, 100);
    }

    $mayor = new Mayor($numeros);
    echo "<br>El número mayor es el ".$mayor->calcularMayor();

?>