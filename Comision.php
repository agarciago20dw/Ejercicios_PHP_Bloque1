<?php 

    class Vendedor {
        private $importe_ventas;

        public function __construct($importe_ventas) {
            $this->importe_ventas = $importe_ventas;
        }

        public function calcularComision() {
            $comision = 0;

            if ($this->importe_ventas < 10000) {
                $comision = ($this->importe_ventas * 5) / 100;
            }
            else if ($this->importe_ventas < 20000) {
                $comision = ($this->importe_ventas * 8) / 100;
            }
            else if ($this->importe_ventas < 40000) {
                $comision = ($this->importe_ventas * 10) / 100;
            }
            else {
                $comision = ($this->importe_ventas * 13) / 100;
            }
            return $comision;
        }

        public function getImporteVentas() {
            return $this->importe_ventas;
        }
    }

    $importe_ventas = rand(5000, 50000);
    $vendedor1 = new Vendedor($importe_ventas);

    echo "Las ventas del vendedor son ".$vendedor1->getImporteVentas()."€ | ";
    echo "Por lo tanto le su comisión es de ".$vendedor1->calcularComision()."€";

?>