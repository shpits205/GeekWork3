<?php
/**
 * Created by JetBrains PhpStorm.
 * User: shpits
 * Date: 24.10.13
 * Time: 14:23
 * To change this template use File | Settings | File Templates.
 */

abstract class AbstractAnimal
{
    private $name;
    private $weight;
    private $age;

    abstract public function setInfoAnimal($name, $weight, $age);

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getAge()
    {
        return $this->age;
    }

}