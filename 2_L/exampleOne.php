<?php
namespace L;
//Неверная реализация

// class Database {
//     public function connect()
//     {

//     }

//     public function read()
//     {

//     }

//     public function write()
//     {

//     }

//     public function joinTables()
//     {

//     }
// }

// class MySQLDatabase extends Database {
//     public function connect()
//     {
        
//     }

//     public function read() {

//     }

//     public function write()
//     {
        
//     }

//     public function joinTables()
//     {
        
//     }
// }

// class MongoDatabase {
//     public function connect()
//     {
        
//     }

//     public function read() {

//     }

//     public function write()
//     {
        
//     }

//     public function joinTables()
//     {
//         throw new Error('there are no tables in MongoDB');
//     }
// }

//Верная реализация

class Database {
    public function connect() 
    {

    }

    public function read()
    {

    }

    public function write()
    {

    }

    public function joinTables()
    {

    }
}

class SQLDatabase extends Database {
    public function connect() {

    }

    public function read()
    {

    }

    public function write()
    {

    }

    public function joinTables()
    {

    }
}

class NoSQLDatabase extends Database {
    public function connect() 
    {

    }

    public function read()
    {

    }

    public function write()
    {

    }

    public function createIndexex()
    {

    }
}

class MySQLDatabase extends SQLDatabase {
    public function connect() 
    {

    }

    public function read()
    {

    }

    public function write()
    {

    }

    public function joinTables()
    {

    }
}

class MongoDatabase extends NoSQLDatabase {
    public function connect() {

    }

    public function read()
    {

    }

    public function write()
    {

    }

    public function createIndexex()
    {

    }
}