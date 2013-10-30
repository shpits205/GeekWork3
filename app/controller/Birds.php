<?php
/**
 * Created by JetBrains PhpStorm.
 * User: shpits
 * Date: 24.10.13
 * Time: 14:28
 * To change this template use File | Settings | File Templates.
 */

class Birds extends AbstractBirds implements AnimalShowInfo
{
    public function setInfoAnimal($name, $weigh, $age)
    {
        $this->setName($name);
        $this->setWeight($weigh);
        $this->setAge($age);
    }

    public function showInfo()
    {
        echo $this->getName() . "<br>";
        echo $this->getWeight() . "KG.<br>";
        echo $this->getAge() . "Year.<br>";
    }
}
