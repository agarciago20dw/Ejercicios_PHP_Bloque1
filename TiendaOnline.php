<?php 

    class TiendaOnline {
        private $total_compra;
        private $tipo_compra;
        private $tipos = ["mascotas", "ropa"];
        private $gastos_envio = 0;

        public function __construct($total_compra, $tipo_compra) {
            $tipo_compra = strtolower($tipo_compra);

            if (!$this->tipoValido($tipo_compra)) {
                throw new Exception("¡EL TIPO DE COMPRA ESPECIFICADO NO ES CORRECTO!");
            }
            else {
                $this->total_compra = $total_compra;
                $this->tipo_compra = $tipo_compra;
            }
            
        }

        private function tipoValido ($tipo) {
            if (($tipo != $this->tipos[0]) && ($tipo != $this->tipos[1])) {
                return false;
            }
            return true;
        }

        public function comprobarEnvio() {
            if ($this->total_compra < 19) {
                if ($this->tipo_compra == $this->tipos[0]) {
                    echo "NO SE PUEDE REALIZAR LA COMPRA";
                }
                else {
                    echo "LOS GASTOS DE ENVIO SON 9€";
                    $this->gastos_envio = 9;
                }
            }
            else if ($this->total_compra <= 40) {
                echo "LOS GASTOS DE ENVIO SON 9€";
                $this->gastos_envio = 9;
            }
            else {
                echo "LOS GASTOS DE ENVIO SON GRATIS";
            }
        }

        public function calcularPrecioFinal() {
            return $this->total_compra + $this->gastos_envio + (($this->total_compra * $this->calcularIva()) / 100);
        }

        private function calcularIva() {
            if ($this->tipo_compra == $this->tipos[0]) {
                return 10;
            }
            else {
                return 21;
            }
        }

        public function getTotalCompra() {
            return $this->total_compra;
        }

        public function getTipoCompra() {
            return $this->tipo_compra;
        }
    }

    $total_compra = rand(1, 100);
    $tipos = ["mascotas", "ropa", "comida"];
    $tipo_compra = $tipos[rand(0, 2)];

    try {
        $tienda1 = new TiendaOnline($total_compra, $tipo_compra);
        echo "Total compra: ".$tienda1->getTotalCompra().", Tipo compra: ".$tienda1->getTipoCompra()."<br>";
        $tienda1->comprobarEnvio();
        echo "<br>Precio más iva: ".$tienda1->calcularPrecioFinal()."€";
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }

?>