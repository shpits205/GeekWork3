<?php
/**
 * Created by JetBrains PhpStorm.
 * User: shpits
 * Date: 24.10.13
 * Time: 14:27
 * To change this template use File | Settings | File Templates.
 */

abstract class AbstractBirds extends AbstractAnimal
{
    private $pery_color;
    private $fly;

    public function setHorns($color)
    {
        $this->pery_color = $color;
    }

    public function getHorns()
    {
        return $this->pery_color;
    }

    public function setFly($fly)
    {
        $this->fly = $fly;
    }

    public function getfly()
    {
        return $this->fly;
    }

}