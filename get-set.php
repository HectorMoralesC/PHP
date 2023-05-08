<?php 
//Creamos la clase Profesor
    class Profesor {
        //PROPIEDADES del objeto
        //ATRIBUTOS
        private $nombre;
        private $materia;
        //MÉTODOS
        //Getters y Setters
        public function getNombre() {
            return $this->nombre;
        }
        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }
        public function getMateria() {
            return $this->materia;
        }
        public function setMateria($materia) {
            $this->materia = $materia;
        }
    }
    
    //Instanciaciones de objetos
    $p1 = new Profesor();
    $p2 = new Profesor();
    $p3 = new Profesor();
    //echo $p1->nombre; //No se puede porque los atributos son privados

    //Damos valores con métodos SETTERS (función de INPUTS)
    $p1->setNombre("Juan");
    $p2->setNombre("Pedro");
    $p3->setNombre("Manolo");
    $p1->setMateria("Inglés");
    $p2->setMateria("Filosofia");
    $p3->setMateria("Matemáticas");

    //Ejercicio: Haz una frase con los tres profesores y su materia que imparten
    echo "{$p1->getNombre()}, ". $p2->getNombre() . " y {$p3->getNombre()} son tres profesores de las asignaturas {$p1->getMateria()}, {$p2->getMateria()} y {$p3->getMateria()} respectivamente.";
    //Obtendremos valores con métodos GETTERS (Funciones OUTPUTS)