<?php

require_once "Student.php";
require_once "Car.php";
require_once "Tv.php";

$student = new Student();

$student->addListStudents('Алексей', 'Донец', 'PHP');
$student->addListStudents('Иван', 'Иванов', 'JS');
$student->addListStudents('Бобик', 'Бобиков', 'Дрессировка');

$student->getListStudents();

$car = new Car();

$car->addListCars('Жигули', 'Красный', 535);
$car->addListCars('BMW', 'Белый', 444);

$car->getListCars();

$tv = new Tv();
$tv->addListTv('Samsung', 24, 28000);
$tv->addListTv('Электроник', 124, 10000);
$tv->getListTv();