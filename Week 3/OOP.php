<?php
class auto{
    public $merk;
    public $kleur;
    public $brandstof;
    
    function geluid(){
        echo"Vrrrrrooeeeem";
    }
}

$beetle = new auto();
$beetle->merk = "Ford</br>";
$beetle->kleur = "Rood</br>";
$beetle->brandstof = "Benzine</br></br>";
$beetle->geluid();


$audi = new auto();
$audi->merk = "Audi</br>";
$audi->kleur = "Zwart</br>";
$audi->brandstof = "Benzine</br>";
$audi->geluid();




?>