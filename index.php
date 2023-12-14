<?php
// esercizio 2
// Creare uno zoo di animali. Partendo da una classe parent Animal che abbia le caratteristiche che preferite,  create quante classi figlie volete che estendano il concetto di Animal (ad esempio: Mammifero, Oviparo, Rettile ecc ecc o anche animali specifici come Leone, Castoro ecc). 
// Libera scelta creativa vostra: l'importante è che le classi figlie estendano il concetto della classe parent



class Animal{
    public $species;
    public $color;
    public $habitat;

    public static $counter = 0;


    public function __construct($species, $color, $habitat){

        $this->species = $species;
        $this->color = $color;
        $this->habitat = $habitat;

        self::$counter++;
    }

    public function getSpecies(){
        echo "L' animale appartiene alla specie $this->species \n";
    }

    public function getColor(){
        echo "L' animale è di colore $this->color \n";
    }

    public function getHabitat(){
        echo "L' animale vive $this->habitat \n";
    }
}


class Felino extends Animal{
    public $hair;
    public $pregnancy;

    public static $counter = 0;

    public function __construct($species, $color, $habitat, $hair, $pregnancy){
        parent::__construct($species, $color, $habitat);
        
        $this->hair = $hair;
        $this->pregnancy = $pregnancy;

        self::$counter++;
    }

    public function getHair(){
        echo "L' animale ha i peli $this->hair \n";
    }

    public function getPregnancy(){
        echo "Il periodo di gestazione dell' animale è $this->pregnancy mesi \n";
    }

    public function infoFelino(){
        echo "L' animale è una $this->species, è di colore $this->color, vive nella $this->habitat, ha il pelo $this->hair e il suo periodo di gestazione è di $this->pregnancy mesi \n";
    }

}

$tigre = new Felino('tigre', 'arancio/nero', 'giugnla', 'lungo', 9);

$tigre->infoFelino();

class Rettile extends Animal{
    public $company;
    public $size;

    public static $counter = 0;

    public function __construct($species, $color, $habitat, $hair, $pregnancy, $company, $size){

    parent::__construct($species, $color, $habitat, $hair, $pregnancy);

    $this->company = $company;
    $this->size = $size;
    self::$counter++;
    }
  
    public function getCompany(){
        echo "L' animale è $this->company \n";
    }

    public function getSize(){
        echo "L' animale è $this->size \n";
    }
  


    public function infoRettile(){
        echo "L' animale è un Rettile, appartiene alla specie $this->species, è di colore $this->color vive nell' habitat $this->habitat, è un animale $this->company ed è di taglia $this->size \n";
    }
   

}


$lion = new Rettile('alligatore', 'verde scuro','Paludoso', 'non ha pelo', '4', ' poco socievole', 'grande');

$lion->infoRettile();

