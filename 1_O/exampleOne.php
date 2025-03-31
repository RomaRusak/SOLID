<?php
namespace O;
//Неверная реализация

// class Weapon {
//     private $type   = null;
//     private $damage = null;
//     private $range  = null;

//     public function __construct(
//         string $type, 
//         int $damage, 
//         int $range
//     )
//     {
//         $this->type   = $type;
//         $this->damage = $damage;
//         $this->range  = $range;
//     }

//     public function attack() 
//     {
//         if ($this->type === 'sword') {
//             echo 'Удар мечом ' . $this->damage;
//         }

//         if ($this->type === 'crossbow') {
//             echo 'Выстрел из арбалет ' . $this->damage;
//         }
//     }
// }

// class Character {
//     private $name   = null;
//     private $weapon = null;

//     public function __construct(string $name, Weapon $weapon)
//     {
//         $this->name   = $name;
//         $this->weapon = $weapon;
//     }

//     public function changeWeapon(Weapon $newWeapon)
//     {
//         $this->weapon = $newWeapon;
//     }

//     public function attack() 
//     {
//         $this->weapon->attack();
//     }
// }

// $sword     = new Weapon('sword', 15, 2);
// $characker = new Character('warrior', $sword);
// $crossbow  = new Weapon('crossbow', 40, 100); 
// $characker->changeWeapon($crossbow);
// $characker->attack();

//Верная реализация

interface Attacker {
    public function attack(): void;
}

class Weapon implements Attacker {
    public $damage = null;
    public $range  = null;

    public function __construct(
        int $damage, 
        int $range
    )
    {
        $this->damage = $damage;
        $this->range  = $range;
    }

    public function attack(): void 
    {
        
    }
}

class Sword extends Weapon{
    public function attack(): void 
    {
        echo 'Удар мечом ' . $this->damage;
    }
}

class Crossbow extends Weapon {
    public function attack(): void 
    {
        echo 'Выстрел из арбалета ' . $this->damage;
    }
}

class Character {
    private $name   = null;
    private $weapon = null;

    public function __construct(string $name, Weapon $weapon)
    {
        $this->name   = $name;
        $this->weapon = $weapon;
    }

    public function changeWeapon(Weapon $newWeapon)
    {
        $this->weapon = $newWeapon;
    }

    public function attack() 
    {
        $this->weapon->attack();
    }
}

$sword     = new Sword(15, 2);
$characker = new Character('warrior', $sword);
$crossbow  = new Crossbow(40, 100); 

// $characker->attack();
// $characker->changeWeapon($crossbow);
// $characker->attack();