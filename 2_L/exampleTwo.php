<?php

namespace L;
// //Неверная реализация

// use Exception;

// class Bird {
//     public function fly()
//     {
//         $flySpeed = 10;
//         return $flySpeed;
//     }
// }

// class Duck extends Bird {
//     public function fly()
//     {
//         $flySpeed = 8;
//         return $flySpeed;
//     }

//     public function swim()
//     {
//         $swimSpeed = 10;
//         return $swimSpeed;
//     }
// }

// class Penguin extends Bird {
//     public function fly()
//     {
//         return new Exception('I can\'t fly');
//     }

//     public function swim()
//     {
//         $swimSpeed = 10;
//         return $swimSpeed;
//     }
// }

// class BirdRun {
//     private $bird = null;

//     public function __construct(Bird $bird)
//     {
//         $this->bird = $bird;
//     }

//     public function run()
//     {
//         $flySpeed = $this->bird->fly();

//         echo $flySpeed;
//     }
// }

// $bird = new Penguin();
// $birdRun = new BirdRun($bird);
// $birdRun->run();

//Верная реализация 1 вариант

// class Bird {
//     public function fly()
//     {
//         $flySpeed = 10;
//         return $flySpeed;
//     }
// }

// class Duck extends Bird {
//     public function fly()
//     {
//         $flySpeed = 8;
//         return $flySpeed;
//     }

//     public function swim()
//     {
//         $swimSpeed = 10;
//         return $swimSpeed;
//     }
// }

// class Penguin extends Bird {
//     public function fly()
//     {
//         return 0;
//     }

//     public function swim()
//     {
//         $swimSpeed = 10;
//         return $swimSpeed;
//     }
// }

// class BirdRun {
//     private $bird = null;

//     public function __construct(Bird $bird)
//     {
//         $this->bird = $bird;
//     }

//     public function run()
//     {
//         $flySpeed = $this->bird->fly();

//         echo $flySpeed;
//     }
// }

interface FlyableBird {
    public function fly(): int;
}

interface SwimableBird {
    public function swim(): int;
}

class Bird {

}

class Duck extends Bird implements FlyableBird, SwimableBird {
    public function fly(): int
    {
        $flySpedd = 8;
        return $flySpedd;
    }

    public function swim(): int
    {
        $swimSpeed = 10;
        return $swimSpeed;
    }
}

class Penguin extends Bird implements SwimableBird {
    public function swim(): int
    {
        $swimSped = 10;
        return $swimSped;
    }
}

class BirdRun {
    private $bird = null;

    public function __construct(FlyableBird $bird)
    {
        $this->bird = $bird;
    }

    public function run()
    {
        $flySpeed = $this->bird->fly();

        echo $flySpeed;
    }
}

$duck = new Duck();
$birdRun = new BirdRun($duck);

// $birdRun->run();
