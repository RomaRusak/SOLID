<?php
namespace D;

//Неверная реализация

// class MySQLDatabase {
//     public function connect() 
//     {
        
//     }

//     public function saveUser($user)
//     {

//     }
// }

// class UserService {
//     private $database = null;

//     public function __construct(MySQLDatabase $database)
//     {
//         $this->database = $database;
//     }

//     public function saveUser($user)
//     {
//         $this->database->connect();
//         $this->database->saveUser($user);
//     }
// }

//Неверная реализация

interface Database {
    public function connect();
    public function saveUser($user);
}

class MySQLDatabase implements Database {
    public function connect() 
    {
        
    }

    public function saveUser($user)
    {

    }
}

class UserService {
    private $database = null;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function saveUser($user)
    {
        $this->database->connect();
        $this->database->saveUser($user);
    }
}