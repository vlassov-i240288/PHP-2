<?php

include "Product.class.php";

class Discount extends Product
{
    public $state;
    public $complete;
    public $functionality;
    public $package;
    public $reason;

    function __construct($category, $title, $description, $price,
                         $state, $complete, $functionality, $package, $reason)
    {
        parent::__construct($category, $title, $description, $price);
        $this->state = $state;
        $this->complete = $complete;
        $this->functionality = $functionality;
        $this->package = $package;
        $this->reason = $reason;
    }

    public function view()
    {
        echo "
            <hr><h2>Карточка уценённого товара</h2>
            <b>Категория:</b> $this->category<br>
            <b>Наименование:</b> $this->title<br>
            <b>Описание:</b> $this->description<br>
            <b>Цена:</b> $this->price руб.<br>
            <b>Состояние:</b> $this->state<br>
            <b>Комплектность:</b> $this->complete<br>
            <b>Функциональность:</b> $this->functionality<br>
            <b>Состояние упаковки:</b> $this->package<br>
            <b>Причина уценки:</b> $this->reason<br>
        ";
    }
}

$good3 = new Discount("Настольные компьютеры", "XIAOMI", "Китайский брэнд настольных ПК", 23999,
    "Царапина на лицевой панели", "Полный комплект", "Полная функциональность", "Новая", "Царапина на лицевой панели");
$good3->view();