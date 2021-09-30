<?php

    class Persona {
        private $edad;
        private $altura;
        private $acompanado;

        public function __construct($edad, $altura, $acompanado = false) {
            $this->edad = $edad;
            $this->altura = $altura;
            $this->acompanado = $acompanado;
        }

        public function __toString() {
            $valor = "Edad: ".$this->edad." años, Altura: ".$this->altura."cm";
            if ($this->acompanado == true) {
                $valor .= ", Acompañado: Sí";
            }
            else {
                $valor .= ", Acompañado: No";
            }
            return $valor;
        }

        public function getEdad() {
            return $this->edad;
        }

        public function getAltura() {
            return $this->altura;
        }

        public function getAcompanado() {
            return $this->acompanado;
        }

    }

    class Atraccion {
        public function permitirAcceso($persona) {
            if (($persona->getEdad() >= 10) || ($persona->getAltura() >= 120)) {
                return true;
            }
            else if (($persona->getAcompanado()) && ($persona->getEdad() >= 6)) {
                return true;
            }
            return false;
        }
    }

    $personas;
    for ($i = 0; $i < 10; $i++) {
        $edad = rand(1, 99);
        $altura = rand(100, 200);
        if ($edad < 10) {
            $acompanado;
            $booleano = rand(0, 1);
            if ($booleano == 1) {
                $acompanado = true;
            }
            else {
                $acompanado = false;
            }
            $personas[$i] = new Persona($edad, $altura, $acompanado);
        }
        else {
            $personas[$i] = new Persona($edad, $altura);
        }
    }

    $atraccion1 = new Atraccion();

    for ($i = 0; $i < count($personas); $i++) {
        echo "<br>".strval($personas[$i]);
        if ($atraccion1->permitirAcceso($personas[$i])) {
            echo " | PUEDE ENTRAR";
        }
        else {
            echo " | NO PUEDE ENTRAR";
        }
    }

?>