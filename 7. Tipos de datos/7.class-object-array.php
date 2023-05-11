<?php

    class Persona {
        //Atributos
        private $nombre = array();
        private $apellido = array();

        //Métodos
        public function setGuardar($nombre, $apellido){
            $this->nombre[] = $nombre;
            $this->apellido[] = $apellido;
        }
        public function getMostrar(){
            for($i=0; $i<count($this->apellido); $i++){
                $this->formatear($this->nombre[$i], $this->apellido[$i]);
            }
        }
        public function formatear($nombre, $apellido){
            echo 'Nombre: ' . $nombre . ' | Apellido: ' . $apellido . '<br>';
        }
    }

    $persona = new Persona();
    $persona->getMostrar();
    $persona->setGuardar('Jose', 'Fernández');
    $persona->setGuardar('Arnau', 'Garcia');
    $persona->setGuardar('Pedro', 'Jiménez');
    $persona->setGuardar('Marc ', 'Esteve');
    $persona->getMostrar();

?>