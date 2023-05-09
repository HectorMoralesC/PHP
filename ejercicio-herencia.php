<?php
// Definición de la superclase Animal
class Vehiculo {
  protected $name; // Propiedad protegida que contendrá el nombre del animal

  // Atributo 1 Constructor de la clase Animal
  public function __construct($name) {
    $this->name = $name;
  }

  // Método 1 para obtener el nombre del transporte
  public function getName() {
    return $this->name;
  }

  // Método 2 que todos los animales tienen en común
  public function transporte() {
    echo $this->name . " se mueve\n";
  }
}


// Definición de la subclase Gato, que hereda de la clase Animal
class Coche extends Vehiculo {
    // Método específico de la clase Gato
    public function PorDondeCoche() {
        echo $this->transporte() . " por la carretera...\n";
      }
    public function fiumfium() {
      echo $this->name . " está calado...\n";
    }
  }
  
  // Definición de la subclase Avion, que hereda de la clase Vehiculo
  class Avion extends Vehiculo {
    // Método específico de la clase Avion
    public function PorDondeAvion() {
        echo $this->transporte() . " por el cielo...\n";
      }
    public function volar() {
      echo $this->name . " está volando...\n";
    }
  }
  
  // Definición de la subclase Barco, que hereda de la clase Animal
  class Barco extends Vehiculo {
    // Método específico de la clase Vaca
    public function PorDondeBarco() {
        echo $this->transporte() . " por el mar...\n";
      }
    
    public function embarcar() {
      echo $this->name . " está embarcando...\n";
    }
  }

// Creación de objetos a partir de las subclases
$coche = new Coche("Ferrari");
$avion = new Avion("Air Europa");
$barco = new Barco("Barco");

// Uso de los métodos heredados de la superclase
echo $coche->getName() . "\n";
$coche->PorDondeCoche();
echo '<br>';

echo $avion->getName() . "\n";
$avion->PorDondeAvion();
echo '<br>';

echo $barco->getName() . "\n";
$barco->PorDondeBarco();
echo '<hr>';

// Uso de los métodos específicos de las subclases
$coche->fiumfium();
echo '<br>';
$avion->volar();
echo '<br>';
$barco->embarcar();
echo '<br>';
?>
  