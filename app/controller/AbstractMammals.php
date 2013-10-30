<?php
/**
 * Created by JetBrains PhpStorm.
 * User: shpits
 * Date: 24.10.13
 * Time: 14:25
 * To change this template use File | Settings | File Templates.
 */

abstract class AbstractMammals extends AbstractAnimal
{
    private $presence_of_horns;

    public function setHorns($horns)
    {
        $this->presence_of_horns = $horns;
    }

    public function getHorns()
    {
        return $this->presence_of_horns;
    }

    abstract public function milk();
}