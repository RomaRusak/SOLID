<?php

namespace I;

//Неверная реализация

// interface Weapon {
//     public function attack();

//     public function reload();
// }

// class Pistolet implements Weapon {
//     public function attack() 
//     {

//     }
    
//     public function reload() 
//     {

//     }
// }

// class RPG implements Weapon {
//     public function attack() 
//     {

//     }
    
//     public function reload() {

//     }
// }

// class Knife implements Weapon {
//     public function attack() 
//     {

//     }
    
//     public function reload() {
//         throw new Exception('the knife cannot be reloade');
//     }
// }

//Верная реализация

interface Attacker {
    public function attack();
}

interface Reloader {
    public function reload();
}

class Pistolet implements Attacker, Reloader {
    public function attack() 
    {

    }
    
    public function reload() 
    {

    }
}

class RPG implements Attacker, Reloader {
    public function attack() 
    {

    }
    
    public function reload() 
    {

    }
}

class Knife implements Attacker {
    public function attack() 
    {

    }
}