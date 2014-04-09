<?php
class person{
    public $firstname;
    public $age;
    public $isAlive = true;
    public $lastname;
         
}

$Jan = new person();
$Jan-> age ="21";
$Jan-> firstname="Jan";
$Jan-> lastname="Alibaba";

print_r($Jan)

?>