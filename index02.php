<!-- Урок 2. -->
<?php
// Задание 1.
// Создать структуру классов ведения товарной номенклатуры.
// а) Есть абстрактный товар.
// б) Есть цифровой товар, штучный физический товар и товар на вес.
// в) У каждого есть метод подсчета финальной стоимости.
// г) У цифрового товара стоимость постоянная – дешевле штучного товара в два раза.
// У штучного товара обычная стоимость,
// у весового – в зависимости от продаваемого количества в килограммах.
// У всех формируется в конечном итоге доход с продаж.
// д) Что можно вынести в абстрактный класс, наследование?

abstract class Product {
    public $cost;
    abstract function finalCost();
}

class DigitProduct extends Product {
    public function finalCost() {
        return $this->cost / 2;
    }
}

class PhisicalProduct extends Product {
    public function finalCost() {
        return $this->cost;
    }
}

class WeightProduct extends Product {
    public $weight;
    public function finalCost() {
        return $this->cost * $this->weight;
    }
}
// Не понял задачу про доход с продаж, откуда должны взяться эти данные? :)

// Задание 2.
// *Реализовать паттерн Singleton при помощи traits.

trait Singleton {
    static protected $instance;

    public static function getInstance() : self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

class Single {
    use Singleton;
}

$single = Single::getInstance();
