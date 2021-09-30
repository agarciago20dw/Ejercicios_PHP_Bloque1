<?php 

    class Piramide {
        private $base;

        public function __construct($base) {
            if ($this->esPar($base)) {
                throw new Exception("¡NO SE PUEDE FORMAR LA PIRÁMIDE YA QUE LA BASE NO ES IMPAR, VUELVE A INTENTARLO!");
            }
            else {
                $this->base = $base;
            }
        }

        private function esPar ($num) {
            if (($num % 2) == 0) {
                return true;
            }
            return false;
        }

        public function mostrarPiramide() {
            for ($i = 0; $i < $this->base; $i = $i + 2) {
                for ($j = 0; $j < ($this->base - $i); $j++) {
                    echo "&nbsp";
                }
                for ($j = 0; $j <= $i; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
        }
    }

    $base = rand(1, 50);

    try {
        $piramide1 = new Piramide($base);
        echo "BASE: ".$base."<br><br>";
        $piramide1->mostrarPiramide();
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }

?>