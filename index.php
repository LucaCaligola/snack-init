<?php
class Persona {
    public $nome;
    public $cognome;
    public $age;



    public function __construct($nome, $cognome, $age) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->setAge($age);
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($newAge) {
        if (!is_int($newAge)) {
            throw new Exception("L'età inserita deve essere un numero intero");
        }
        $this->age = $newAge;
    }
}