<?php
/**
 * Created by PhpStorm.
 * User: shpits
 * Date: 31.10.13
 * Time: 9:53
 */
namespace app\model;

use app\model\Birds;
use app\model\Mammals;
use app\model\Artiodactyls;

function newBirds()
{
    $bird = new Birds();
    $bird->setName("Birds1");
    $bird->setWeight(30);
    $bird->setAge(12);
    return $bird;
}

function newMammals()
{
    $animal = new Mammals();
    $animal->setName("mammal");
    $animal->setAge(12);
    $animal->getWeight(21);
    return $animal;
}

function newArtiodactyls()
{
    $animal = new Artiodactyls();
    $animal->setName("Artiodactyls");
    $animal->setWeight(31);
    $animal->setAge(1);

    return $animal;
}