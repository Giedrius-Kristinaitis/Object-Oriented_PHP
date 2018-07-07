<?php

namespace Vechiles\Parts;

abstract class Engine {

    private $hp;
    private $torque;

    /**
     * Class constructor
     * @param hp - horsepower
     * @param torque - maximum speed
     */
    public function __construct($hp, $torque){
        $this->hp = $hp;
        $this->torque = $torque;
    }

    /**
     * Turns Engine object instance into a string
     */
    public function toString(){
        return 'Horsepower: ' . $this->hp . ', Torque: ' . $this->torque . ' Nm';
    }
}

?>