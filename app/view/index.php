<?php
include 'autoloader.php';

$animal = new Birds();
$animal->setInfoAnimal("Bird kakady",12,5);
$animal->showInfo();
echo "=========================<br>";
$animal1 = new Birds();
$animal1->setInfoAnimal("Bird Bygaga",2,1);
$animal1->showInfo();
echo "=========================<br>";
$animal2 = new Mammals();
$animal2->setInfoAnimal("Cow Mymy",200,20);
$animal2->showInfo();
echo "=========================<br>";
$animal3 = new Mammals();
$animal3->setInfoAnimal("Baa-lamb Shon",75,20);
$animal3->showInfo();
$animal3->milk();
