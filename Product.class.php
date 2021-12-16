<?php

class Product
{
    public $category;
    public $title;
    public $description;
    public $price;


    public function __construct($category, $title, $description, $price)
    {
        $this->category = $category;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
    }

    public function view()
    {
        echo "
            <hr><h2>Карточка товара</h2>
            <b>Категория:</b> $this->category<br>
            <b>Наименование:</b> $this->title<br>
            <b>Описание:</b> $this->description<br>
            <b>Цена:</b> $this->price руб.<br>
        ";
    }

}

$good1 = new Product("Нетбуки", "Lenovo ThinkCentre M710q", "ПЭВМ Lenovo ThinkCentre M710q <10MRS04600> Intel Core i3-7100T 4ГБ RAM 128Гб SSD DOS", 28087);
$good1->view();

$good2 = new Product("Ноутбуки", "HP OMEN-7", "OMEN игровой ноутбук с мощной видео-картой",59999);
$good2->view();