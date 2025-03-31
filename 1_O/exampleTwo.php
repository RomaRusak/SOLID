<?php
namespace O;
//Неверная реализация

// class Person {
//     public $fullname = null;

//     public function __construct(string $fullname)
//     {
//         $this->fullname = $fullname;
//     }
// }

// class PersonList {
//     public $persons = null;

//     public function __construct(array $persons)
//     {
//         $this->persons = $persons;
//     }

//     public function sort()
//     {
//         $persons = $this->persons;

//         if (count($persons) < 10) {
//             return BubbleSort::sort($persons);
//         }

//         if (count($persons) < 1000) {
//             return MergeSort::sort($persons);
//         }

//         return QuickSort::sort($persons);
//     }
// }

// class Song {
//     public $song = null;

//     public function __construct(string $song)
//     {
//         $this->song = $song;
//     }
// }

// class SongList {
//     public $songs = null;

//     public function __construct(array $songs)
//     {
//         $this->songs = $songs;
//     }

//     public function sort()
//     {
//         $songs = $this->songs;

//         if (count($songs) < 10) {
//             return BubbleSort::sort($songs);
//         }

//         if (count($songs) < 1000) {
//             return MergeSort::sort($songs);
//         }

//         return QuickSort::sort($songs);
//     }
// }


// class BubbleSort {
//     public static function sort(array $arr) : array
//     {
//         return $arr;
//     }
// }

// class QuickSort {
//     public static function sort(array $arr) : array
//     {
//         return $arr;
//     }
// }

// class MergeSort {
//     public static function sort(array $arr) : array
//     {
//         return $arr;
//     }
// }

//Верная реализация

interface Sort {
    public static function sort(array $arr) : array;
}

class BubbleSort implements Sort {
    public static function sort(array $arr) : array 
    {
        return $arr;
    }
}

class QuickSort implements Sort {
    public static function sort(array $arr) : array 
    {
        return $arr;
    }
}

class MergeSort implements Sort {
    public static function sort(array $arr) : array 
    {
        return $arr;
    }
}

class SortClient implements Sort {
    public static function sort(array $arr) : array 
    {
        $arrLen = count($arr);

        if ($arrLen < 10) {
            return BubbleSort::sort($arr);
        }

        if ($arrLen < 1000) {
            return MergeSort::sort($arr);
        }

        return QuickSort::sort($arr);
    }
}

class Person {
    public $fullname = null;

    public function __construct(string $fullname)
    {
        $this->fullname = $fullname;
    }
}

class PersonList {
    public $persons = null;

    public function __construct(array $persons)
    {
        $this->persons = $persons;
    }

    public function sort()
    {
        return SortClient::sort($this->persons);
    }
}

class Song {
    public $song = null;

    public function __construct(string $song)
    {
        $this->song = $song;
    }
}

class SongList {
    public $songs = null;

    public function __construct(array $songs)
    {
        $this->songs = $songs;
    }

    public function sort()
    {
        return SortClient::sort($this->songs);
    }
}