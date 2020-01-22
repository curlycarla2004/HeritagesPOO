<?php

require_once 'class/Animal.php';

class Felin extends Animal
{
    static public function quelleHeure(){
        return date('h:i:s');
    }
}