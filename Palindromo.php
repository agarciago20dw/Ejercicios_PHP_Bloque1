<?php

    class Palindromo {

        private $cadena;

        public function __construct($cadena) {
            $this->cadena = $cadena;
        }

        public function esPalindromo() {
            $cadena_formateada = "";
            for ($i = 0; $i < strlen($this->cadena); $i++) {
                if ($this->cadena[$i] != " ") {
                    $cadena_formateada .= strtolower($this->cadena[$i]);
                }
            }

            $cadena_invertida = "";
            for ($i = (strlen($cadena_formateada) - 1); $i >= 0; $i--) {
                    $cadena_invertida .= $cadena_formateada[$i];
            }

            for ($i = 0; $i < strlen($cadena_formateada); $i++) {
                if ($cadena_formateada[$i] != $cadena_invertida[$i]) {
                    return false;
                }
            }
            return true;
        }

    }

    $cadena = "Luz azul";
    $palindromo = new Palindromo($cadena);

    if ($palindromo->esPalindromo()) {
        echo "'".$cadena."' es un palíndromo";
    }
    else {
        echo "'".$cadena."' no es un palíndromo";
    }

?>