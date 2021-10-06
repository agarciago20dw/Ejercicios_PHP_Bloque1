<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunidad</title>
</head>
<body>
    <form method="get">
        <table style="text-align: center;">
            <tr>
                <td><label>Nº pisos</label></td>
                <td><input type="text" name="pisos" ></td>
            </tr>
            <tr>
                <td><label>Nº puertas</label></td>
                <td><input type="text" name="puertas" ></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="ENVIAR" style="margin-top: 10px;;"></td>
            </tr>
        </table> 
    </form>
    <br>
</body>
</html>

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

        public function mostrarViviendas() {
            
        }

    }


    if ((isset($_GET["pisos"])) && (isset($_GET["puertas"]))) {
        $num_pisos = $_GET["pisos"];
        $num_puertas = $_GET["puertas"];

        $comunidad1 = new Comunidad($num_pisos, $num_puertas);
        echo "<br><br>En esta comunidad hay ".$comunidad1->calcularViviendas()." viviendas";
    }
    
?>