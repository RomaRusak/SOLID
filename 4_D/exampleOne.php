<?php
namespace D;

//Неверная реализация

// interface DriverInterface {
//     public function drive(): void;
// }

// class Driver implements DriverInterface {
//     public function drive(): void 
//     {
//         echo 'I am driving';
//     }
// }

// class BusDriver extends Driver implements DriverInterface {
//     public function drive() :void 
//     {
//         echo 'I am driving bus';
//     }
// }

// class TruckDriver extends Driver implements DriverInterface {
//     public function drive() :void 
//     {
//         echo 'I am driving truck';
//     }
// }

// class Operator {
//     private $driver = null;

//     public function __construct(BusDriver $driver)
//     {
//         $this->driver = $driver;
//     }

//     public function drive() {
//         $this->driver->drive();
//     }
// }

// $busDriver  = new BusDriver();
// $operator   = new Operator($busDriver);

// $operator->drive();

//Верная реализация

interface DriverInterface {
    public function drive(): void;
}

class Driver implements DriverInterface {
    public function drive(): void 
    {
        echo 'I am driving';
    }
}

class BusDriver extends Driver implements DriverInterface {
    public function drive() :void 
    {
        echo 'I am driving bus';
    }
}

class TruckDriver extends Driver implements DriverInterface {
    public function drive() :void 
    {
        echo 'I am driving truck';
    }
}

class Operator {
    private $driver = null;

    public function __construct(Driver $driver)
    {
        $this->driver = $driver;
    }

    public function drive() 
    {
        $this->driver->drive();
    }
}

$busDriver  = new BusDriver();
$operator = new Operator($busDriver);

// $operator->drive();