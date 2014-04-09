<?php

class Games{
    public $name;
    public $publisher;
    public $console;
    public $reldate;
    
    public function __construct($name , $publisher ,$console ,$reldate){
        $this->name = $name;
        $this->publisher = $publisher;
        $this->console = $console;
        $this->reldate = $reldate;
    }
}

$game1 = new Games("Titan Fall", "Infinity Ward", "PC", "20 Feb");


$game2 = new Games("Thief", "Bethesda", "Xbox", "20 Febuari");      

var_dump($game1);

?>