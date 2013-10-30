<?php
/**
 * Created by JetBrains PhpStorm.
 * User: shpits
 * Date: 24.10.13
 * Time: 14:25
 * To change this template use File | Settings | File Templates.
 */

abstract class AbstractArtiodactyls extends AbstractAnimal
{
    private $hair_color;

    public function setHorns($color)
    {
        $this->hair_color = $color;
    }

    public function getHorns()
    {
        return $this->hair_color;
    }

}