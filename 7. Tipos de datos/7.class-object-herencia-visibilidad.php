<?php

//HERENCIA
//Superclase "Foo"
class Foo {
    public function printItem($string) {
        echo 'Foo: ' . $string . PHP_EOL;
    }
    public function printPHP(){
        echo 'PHP is great.' . PHP_EOL;
    }
}
//Subclase "bar"
class Bar extends Foo {
    //Este método printItem($string) también se hereda pero hay "sobreescritura"
    public function printItem($string) {
        echo 'Bar: ' . $string . PHP_EOL;
    }
    //El método printPHP() se hereda
}

$foo = new Foo(); //Instanciación de la clase para crear objetos
$bar = new Bar();

$foo->printItem('baz'); // Salida: 'Foo: baz' es método de class Foo()
$foo->printPHP();       // Salida: 'PHP is great' es método de class Foo()

$bar->printItem('baz'); // Salida: 'Bar: baz' es método de class Bar()
$bar->printPHP();       // Salida: 'PHP is great' es método heredado de la class Foo()

?>