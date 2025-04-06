<?php

namespace I;

//Неверная реализация

// use Exception;

// interface Orderable {
//     public function getPayment();
//     public function getShipment();
//     public function getDiscount();
//     public function getTotalPrice();
//     public function getClientInfo();
//     public function getComment();
// }

// class Order implements Orderable {
//     public function getPayment() {
//         return 'Webmoney';
//     }

//     public function getShipment() {
//         return 'Post';
//     }

//     public function getDiscount() {
//         return 50;
//     }

//     public function getTotalPrice() {
//         return 100;
//     }

//     public function getClientInfo() {
//         return 'Email Phone';
//     }

//     public function getComment() {
//         return 'Comment';
//     }
// }

// class QuickOrder implements Orderable {
//     public function getPayment() {
//         throw new Exception('Error payment');
//     }

//     public function getShipment() {
//         throw new Exception('Error shipment');
//     }

//     public function getDiscount() {
//         throw new Exception('Error discount');
//     }

//     public function getTotalPrice() {
//         return 100;
//     }

//     public function getClientInfo() {
//         return 'Phone';
//     }

//     public function getComment() {
//         throw new Exception('Error comment');
//     }
// }

//Верная реализация

interface OrderInterface {
    public function getTotalPrice();
    public function getClientInfo();
}

interface PaymentInterface {
    public function getPayment();
}

interface ShipmentInterface {
    public function getShipment();
}

interface DiscountInterface {
    public function getDiscount();
}

interface CommentInterface {
    public function getComment();
}

class Order implements OrderInterface, PaymentInterface, ShipmentInterface, DiscountInterface, CommentInterface{
    public function getPayment() {
        return 'Webmoney';
    }

    public function getShipment() {
        return 'Post';
    }

    public function getDiscount() {
        return 50;
    }

    public function getTotalPrice() {
        return 100;
    }

    public function getClientInfo() {
        return 'Email Phone';
    }

    public function getComment() {
        return 'Comment';
    }
}

class QuickOrder implements OrderInterface{
    public function getTotalPrice() {
        return 100;
    }

    public function getClientInfo() {
        return 'Email Phone';
    }
}